<!DOCTYPE html>
<html lang="es">

	<!-- SE LLAMA AL HEADER Y SE INCLUYE EN EL INICIO	 -->
	<?php include('header.php'); ?>

	<body>

		<!-- SECCIÓN INICIO -->
		<section class="logo-superior">
			<div class="container">
				<div class="row">
					<?php include('template/logo-superior.php'); ?>
				</div>
			</div>
		</section>

		<!-- SECCIÓN BLOQUES -->
		<section id="fondo-gris">
			<div class="container-fluid">

				<!-- TITULO -->
				<div class="row">
					<h1 class="wow fadeIn"><a href="./index.php">Ley de Transparencia</a></h1>
					<hr>
				</div>

				<!-- PRIMER ROW -->
				<h4>1º</h4>
				<div class="row primer-row wow fadeInUp">
					<?php include('template/bloque-1.php'); ?>
				</div>
				
				<!-- SEGUNDO ROW -->
				<h4>2º</h4>
				<div class="row primer-row wow fadeInUp">
					<?php include('template/bloque-2.php'); ?>
				</div>

				<!-- TERCER ROW -->
				<h4>3º</h4>
				<div class="row row-card wow fadeInUp">
					<?php include('template/bloque-3.php'); ?>
				</div>

				<!-- CUARTO ROW -->
				<h4>4º</h4>
				<div class="row row-card tercer-row wow fadeInUp">
					<?php include('template/bloque-4.php'); ?>
				</div>

				<!-- QUINTO ROW -->
				<h4>5º</h4>
				<div class="row cuarto-row wow fadeInUp quinto-bloque">
					<?php include('template/bloque-5.php'); ?>
				</div>

				<!-- SEXTO ROW -->
				<h4>6º</h4>
				<div class="row wow fadeInUp">
					<?php include('template/bloque-6.php'); ?>
				</div>

				<!-- SÉPTIMO ROW -->
				<h4>7º</h4>
				<div class="row">
					<?php include('template/bloque-7.php'); ?>
				</div>

				<!-- OCTAVO ROW -->
				<h4>8º</h4>
				<div class="row" style="margin-top: 50px;">
					<?php include('template/bloque-8.php'); ?>
				</div>		

				<!-- NOVENO BLOQUE -->
				<h4>9º</h4>
				<section id="what-we-do" style="margin-top: 15px;margin-bottom: 15px;">
						<div class="row primero card-uls bloque-9-fluid">
							<?php include('template/bloque-9.php'); ?>
						</div>
				</section>


				<!-- DÉCIMO BLOQUE -->
				<h4>10º</h4>
				<section id="what-we-do" style="margin-bottom: 50px;">
						<div class="row mt-5 card-uls bloque-10-fluid">
							<?php include('template/bloque-10.php'); ?>
						</div>
				</section>


			</div>
		</section>

		<!-- SECCIÓN QUIENES SOMOS -->
		<!-- <section>
			<div class="row">
				<?php include('quienes-somos.php'); ?>
			</div>
		</section> -->

<?php include('footer.php'); ?>

