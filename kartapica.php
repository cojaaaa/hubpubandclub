<?php 
session_start();
// unset($_SESSION["cart"]);
// var_dump($_SESSION['cart']);

require_once ('./initdb.php');
require_once ('./functions.php');

$status = "";
if (!isset($_SESSION["cart"])) $_SESSION["cart"]=[];

if (isset($_POST["id"]) && $_POST["id"] != "") {
	$id = $_POST["id"];
	array_push($_SESSION["cart"],$id);
	$status = "";
}

?>

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

    
	<section class="home-slider owl-carousel" style="height:450px;">

<div class="slider-item" style="background-image: url(images/pice1.jpg);height:500px;" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row slider-text justify-content-center align-items-center">

			<div class="col-md-7 col-sm-12 text-center ftco-animate" style="margin-top:-200px;">
				<h1 class="mb-3 mt-5 bread">Meni</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Početna Stranica</a></span> <span>Meni</span></p>
			</div>

		</div>
	</div>
</div>
</section>

    
    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Costa Coffee<br><span style="font-size: 15px;color: #524f4f;">Signature Blend Dark Roast </span> </h3>
        		<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Costa Coffee');
					}
				?>
        		<h3 class="mb-5 heading-pricing ftco-animate">Nescafe</h3>
        		<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Nescafe');
					}
				?>

				<h3 class="mb-5 heading-pricing ftco-animate">Topla čokolada</h3>
				<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Topla čokolada');
					}
				?>


        	</div>
			
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Čajevi<br><span style="font-size: 15px;color: #524f4f;">Dolcezza</span></h3>
				
        		<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Čajevi');
					}
				?>

				<h3 class="mb-5 heading-pricing ftco-animate">Biljni čaj</h3>
				<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Biljni čaj');
					}
				?>

        		
        	</div>


 			<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Gazirani sokovi</h3>
        		<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Gazirani sokovi');
					}
				?>

        	</div>



 			<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Negazirani sokovi</h3>
				<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Negazirani sokovi');
					}
				?>

        	</div>
			<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Točena piva</h3>
        		<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Točena piva');
					}
				?>

        	</div>
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Piva u flašicama</h3>
        		<?php
					foreach ($menu as $item) {
						if ($item['product_type'] == 'pice') printItem($item, 'Piva u flašicama');
					}
				?>
        	</div>
    	</div>
    </section>

    <?php include "footer.php"; ?>
    
  

	<?php include "skripte.php"; ?>
    
	<script>
        const order = (_id) => {
            data = {
                id: _id
            };
            data = JSON.stringify(data);
            fetch('./order.php',{
                method: "POST",
                body: data,
            }).then((response) => {
                response.json().then((data)=> {
                    console.log(data);
					if (data.cart_count != 0) {
						let cart_count = document.getElementById('cart_count');
						cart_count.innerHTML = data.cart_count;
						let cart_count_span = document.getElementById('cart_count_span');
						cart_count_span.style.visibility = 'visible';
					}
                });
            })
        }
    </script>

  </body>
</html>