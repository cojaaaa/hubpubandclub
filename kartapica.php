<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>The Hub | Karta pića</title>
  <?php include "pocetni-linkovi.php";?>
  </head>
  <body>
  <?php include "nav.php" ?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/pice1.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Karta Pića</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Početna Stranica</a></span> <span>Karta Pića</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    
<?php include 'database.php' ?>
    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Costa Coffee<br><span style="font-size: 15px;color: #524f4f;">Signature Blend Dark Roast </span> </h3>
        		<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Costa Coffee");
					}
				?>
        		<h3 class="mb-5 heading-pricing ftco-animate">Nescafe</h3>
        		<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Nescafe");
					}
				?>

				<h3 class="mb-5 heading-pricing ftco-animate">Topla čokolada</h3>
				<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Topla čokolada");
					}
				?>


        	</div>
			
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Čajevi<br><span style="font-size: 15px;color: #524f4f;">Dolcezza</span></h3>
				
        		<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Čajevi");
					}
				?>

				<h3 class="mb-5 heading-pricing ftco-animate">Biljni čaj</h3>
				<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Biljni čaj");
					}
				?>

        		
        	</div>


 			<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Gazirani sokovi</h3>
        		<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Gazirani sokovi");
					}
				?>

        	</div>



 			<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Negazirani sokovi</h3>
				<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Negazirani sokovi");
					}
				?>

        	</div>
			<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Točena piva</h3>
        		<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Točena piva");
					}
				?>

        	</div>
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Piva u flašicama</h3>
        		<?php
						for ($i = 1; $i <= count($pica); $i++) {
						${"item_pica_" . $i}->stampajPica("Piva u flašicama");
					}
				?>
        	</div>
    	</div>
    </section>

    <?php include "footer.php"; ?>
    
  

	<?php include "skripte.php"; ?>
    
  </body>
</html>