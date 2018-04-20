// =========================================================================================================
// 	SE DECLARAN LAS VARIABLES DE GULP.JS A UTILIZAR
// 	NOTA: SE AGREGARON TODAS LOS PLUGIN AL PACKAGE.JSON POR MEDIO DE npm install --save-dev
// =========================================================================================================
var gulp = require('gulp'),
	concat = require('gulp-concat'),
	sass	= require('gulp-sass'),
	minifyCSS = require('gulp-minify-css'),
	uglify = require('gulp-uglify'),
	clean = require('gulp-rimraf'),
	rename = require('gulp-rename'),
	browserSync = require('browser-sync'),
	sourcemaps = require('gulp-sourcemaps');



// =========================================================================================================
// 	VARIABLES DIRECTORIO
// =========================================================================================================
var	targetCss = 'css',
	targetJs = 'js',
	targetFont = 'fonts',
	targetAssets = 'assets';




// =========================================================================================================
// 	SE TRANSFORMA DE SASS A CSS Y SE CONCATENA TODO A UN .CSS EN DEVELOPER
// =========================================================================================================
gulp.task('sass-to-css', ['limpiardev'], function(){
  gulp.src('assets/sass/**/*.scss')
  	// .pipe(sourcemaps.init({loadMaps: true}))
	.pipe(sass())	
	.pipe(concat('uls-css.css'))
	// .pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('css/'))
	.pipe(browserSync.stream());
});

// =========================================================================================================
// 	SE CONCATENAN LOS JS EN DEVELOPER UN SOLO ARCHIVO
// =========================================================================================================
gulp.task('concat-js', ['limpiardev'], function () {
  gulp.src('assets/js/**/*.js')
  .pipe(concat('uls-js.js'))
  .pipe(gulp.dest('js/'))
  .pipe(browserSync.stream());
});






// =========================================================================================================
// 	SE MINIFICA EL JS EN PROD
// =========================================================================================================
gulp.task('minjs', ['limpiarprod'], function () {
  gulp.src('assets/js/**/*.js')
  .pipe(concat('uls-js.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('prod/'))
});

// =========================================================================================================
// 	SE MINIFICA EL CSS EN PROD
// =========================================================================================================
gulp.task('mincss', ['limpiarprod'], function() {
	gulp.src('css/**/*.css')
		.pipe(minifyCSS())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('prod/'))
});





// =========================================================================================================
// 	EN LIMPIARPROD SE EJECUTA PARA PASAR A PRODUCCION Y LIMPIAR EL DEVELOPER
// =========================================================================================================
gulp.task('limpiarprod', function() {
	gulp.src(['!./js/jquery-3.2.1.js', targetCss + '**/*.css', targetJs + '**/*.js', targetFont + '/*'], {read:false})
	.pipe(clean());
});

// =========================================================================================================
// 	EN LIMPIARDEV SE EJECUTA PARA PASAR A DEVELOPER Y LIMPIAR LA PRODUCCIÓN
// =========================================================================================================
gulp.task('limpiardev', function() {
	gulp.src(['prod/**/*'], {read:false})
	.pipe(clean());
});





// =========================================================================================================
// 	SE INICIA WATCH Y BROWSER-SYNC PARA VER CAMBIOS EN VIVO AMEKE
// =========================================================================================================
gulp.task('watch', ['connect'], function() {
	gulp.watch('assets/**/*.scss', ['sass-to-css']);
	gulp.watch('assets/js/**/*.js', ['concat-js']);
});



// =========================================================================================================
// 	SE INICIA CONNECT PARA VER LOS CAMBIOS A .PHP Y MONTAR EN DESDE :8888/TRANSPARENCIA A PUERTO :3000/
// =========================================================================================================
gulp.task('connect', function() {
	browserSync({
		proxy: "localhost:8888/transparencia",
		files: ["**/*.php"]
	});
});



// =========================================================================================================
// 	SE INICIA EL MODO DEVELOPER
// =========================================================================================================
gulp.task('dev', ['sass-to-css', 'concat-js', 'watch']);

// =========================================================================================================
// 	SE INICIA EL MODO PRODUCCIÓN 
// =========================================================================================================
gulp.task('prod', ['minjs', 'mincss', 'watch']);


