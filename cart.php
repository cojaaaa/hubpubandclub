<?php 
session_start();
include_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>The Hub | Cart</title>
    <?php include "pocetni-linkovi.php"; ?>
  </head>
  <body>
  <?php include "nav.php" ?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/cart.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Korpa</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Korpa</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php 
								$array_items = $_SESSION["cart"];
								foreach ($array_items as $item) {
									echo "<tr class=\"text-center\">";
									echo "<td class=\"product-remove\"><a href=\"#\"><span class=\"icon-close\"></span></a></td>";
									echo "<td style=\"width:90%;\" class=\"product-name\"><h3>" . $array_jela[$item-1]->getName() . "</h3>";
						        	echo "<p>" . $array_jela[$item-1]->getDescription() . "</p></td>";
									echo "<td style=\"width:10%;\" class=\"price\">" . $array_jela[$item-1]->getPrice() . " rsd</td>";
									echo "</tr>";
								}
								
								?>

						      
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Račun</h3>
    					<p class="d-flex">
    						<span>Cena</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Dostava</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Popust</span>
    						<span>$3.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Ukupno</span>
    						<span>$17.60</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Plati</a></p>
    			</div>
    		</div>
			</div>
		</section>

    

	<?php include "footer.php"; ?>
    
  

  <!-- loader -->
  <?php include "skripte.php"; ?>

    
  </body>
</html>