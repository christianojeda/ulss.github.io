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
		<section>
			<div class="container">

				<!-- TITULO -->
				<div class="row">
					<h1 class="wow fadeIn"><a href="./index-fluid.php">Ley de Transparencia</a></h1>
					<hr>
				</div>

				<!-- PRIMER ROW -->
				<div class="row primer-row wow fadeInUp">
					<?php include('template/bloque-1.php'); ?>
				</div>

				<!-- SEGUNDO ROW -->
				<div class="row segundo-row wow fadeInUp">
					<?php include('template/bloque-2.php'); ?>
				</div>

				<!-- TERCER ROW -->
				<div class="row row-card wow fadeInUp bloque-3">
					<?php include('template/bloque-3.php'); ?>
				</div>

				<!-- CUARTO ROW -->
				<div class="row row-card tercer-row wow fadeInUp">
					<?php include('template/bloque-4.php'); ?>
				</div>

				<!-- QUINTO ROW -->
				<div class="row cuarto-row wow fadeInUp">
					<?php include('template/bloque-5.php'); ?>
				</div>

				<!-- SEXTO ROW -->
				<div class="row wow fadeInUp">
					<?php include('template/bloque-6.php'); ?>
				</div>

				<!-- SÉPTIMO ROW -->
				<div class="row">
					<?php include('template/bloque-7.php'); ?>
				</div>

				<!-- OCTAVO ROW -->
				<div class="row" style="margin-top: 50px;">
					<?php include('template/bloque-8.php'); ?>
				</div>		

				<!-- NOVENO BLOQUE -->
				<div id="what-we-do" class="row primero card-uls bloque-9" style="margin-top: 15px;margin-bottom: 15px;">
					<?php include('template/bloque-9.php'); ?>
				</div>

				<!-- DÉCIMO BLOQUE -->
				<div id="what-we-do" class="row mt-5 card-uls bloque-10" style="margin-bottom: 50px;">
					<?php include('template/bloque-10.php'); ?>
				</div>

				<!-- UNDÉCIMO BLOQUE -->
				<div id="what-we-do" class="row mt-5 card-uls bloque-11" style="margin-bottom: 50px;">
					<?php include('template/bloque-11.php'); ?>
				</div>

			</div>
		</section>

		<!-- SECCIÓN QUIENES SOMOS -->
		<!-- <section>
			<div class="row">
				<?php include('quienes-somos.php'); ?>
			</div>
		</section> -->

<?php include('footer.php'); ?>

