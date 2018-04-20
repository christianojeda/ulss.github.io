<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- El logotipo y el icono que despliega el menú se agrupan
			 para mostrarlos mejor en los dispositivos móviles -->
	<div class="container">
		<div class="navbar-header col-sm-2 col-md-2 col-lg-2">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-ex1-collapse">
				<span class="sr-only">Desplegar navegación</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- <a class="navbar-brand" href="#">Logotipo</a> -->
			<img class="center-block hidden-sm" src="img/logo.svg" style="width: 30%;">
		</div>
	 
		<!-- Agrupar los enlaces de navegación, los formularios y cualquier
				 otro elemento que se pueda ocultar al minimizar la barra -->
		<div class="collapse navbar-collapse navbar-ex1-collapse navbar-right col-sm-10 col-md-10 col-lg-10">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">INICIO</a></li>
				<li><a href="#">QUIÉNES SOMOS</a></li>
				<li><a href="#">SERVICIOS</a></li>
				<li><a href="#">CLIENTES</a></li>
				<li><a href="#">CONTACTO</a></li>
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Menú #1 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Acción #1</a></li>
						<li><a href="#">Acción #2</a></li>
						<li><a href="#">Acción #3</a></li>
						<li class="divider"></li>
						<li><a href="#">Acción #4</a></li>
						<li class="divider"></li>
						<li><a href="#">Acción #5</a></li>
					</ul>
				</li> -->
			</ul>
	 
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Buscar">
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>

		</div>
	</div>
</nav>