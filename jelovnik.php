<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>The Hub | Jelovnik</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicon za sajt -->
	<link href="images/favicon.png" rel="icon">
	<!-- Favicon za sajt -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	
	<?php include "nav.php" ?>

	<section class="home-slider owl-carousel">

		<div class="slider-item" style="background-image: url(images/meni.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">

					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Meni</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Početna Stranica</a></span> <span>Meni</span></p>
					</div>

				</div>
			</div>
		</div>
	</section>


	<?php include "database.php" ?>


	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Hladna predjela - <span style="font-size: 15px;color: #524f4f;">daska</span> </h3>
					<!-- <div class="pricing-entry d-flex ftco-animate">
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Suhomesnato</span></h3>
	        				<span class="price">990 rsd</span>
	        			</div>
	        			<div class="d-block">
	        				<p>- Svinjska pršuta, goveđa pečenica, kulen i goveđa pršuta</p>
	        			</div>
						<span style="float:right;border-bottom:1px solid #c49b63;font-size:14px"><a href="cart.html">+ Dodaj u korpu</a></span>
        			</div>
        		</div> -->
					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Hladna predjela");
					}
					?>

					<h3 class="mb-5 heading-pricing ftco-animate">Topla predjela</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Topla predjela");
					}
					?>

				</div>
				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Jela po porudzbini</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Jela po porudzbini");
					}
					?>

				</div>

				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Risotto</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Risotto");
					}
					?>

					<h3 class="mb-5 heading-pricing ftco-animate">Pizza</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Pizza");
					}
					?>
					<h3 class="mb-5 heading-pricing ftco-animate">Ribe i morski plodovi</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Ribe i morski plodovi");
					}
					?>

				</div>

				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Burrito</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Burrito");
					}
					?>
					<h3 class="mb-5 heading-pricing ftco-animate">Pasta - <span style="font-size: 15px;color: #524f4f;">la Molisana</span></h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Pasta");
					}
					?>

				</div>



				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Obrok salate</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Obrok salate");
					}
					?>

				</div>
				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Burgeri</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Burgeri");
					}
					?>

				</div>
				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Dodaci</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Dodaci");
					}
					?>

				</div>
				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Healthy food</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Healthy food");
					}
					?>

					<h3 class="mb-5 heading-pricing ftco-animate">Slana palačinka</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Slana palačinka");
					}
					?>

				</div>

				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Homemade sweets</h3>

					<?php
					for ($i = 1; $i <= count($jela); $i++) {
						${"item_jela_" . $i}->stampajJela("Homemade sweets");
					}
					?>

				</div>
			</div>
		</div>
	</section>


	<?php include "footer.php"; ?>



	<?php include "skripte.php"; ?>

</body>

</html>