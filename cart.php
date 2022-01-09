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
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
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
						        <th>&nbsp;</th>
						        <th>Proizvod</th>
						        <th>Cena</th>
						        <th>Količina</th>
						        <th>Ukupna cena</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/bez-pozadine.png);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Creamy Latte Coffee</h3>
						        	
						        </td>
						        
						        <td class="price">$4.90</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$4.90</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(images/bez-pozadine.png);"></div></td>
						        
						        <td class="product-name">
						        	<h3>Grilled Ribs Beef</h3>
						        </td>
						        
						        <td class="price">$15.70</td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>
						        
						        <td class="total">$15.70</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
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
    				<p class="text-center"><a href="checkout.php" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

    

	<?php include "footer.php"; ?>
    
  

  <!-- loader -->
  <?php include "skripte.php"; ?>

    
  </body>
</html>