<?php 
session_start();

$total = $_GET["total"];
$delivery = $_GET["delivery"];
$discount = $_GET["discount"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>The Hub | Checkout</title>
    <?php include "pocetni-linkovi.php"; ?>
  </head>
  <body>
  <?php include "nav.php" ?>

   

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 ftco-animate">
						<form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
							<h3 class="mb-4 billing-heading">Detalji</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Ime</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Prezime</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
		           
		           
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Broj telefona</label>
	                  <input type="tel" class="form-control" placeholder="" value="+381 ">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Adresa</label>
	                  <input type="text" class="form-control" placeholder="">
	                </div>
                </div>
                <div class="w-100"></div>
                
	            </div>
	          </form><!-- END -->



	          <div class="row mt-5 pt-3 d-flex">
	          	<div class="col-md-6 d-flex">
	          		<div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Račun</h3>
	          			<p class="d-flex">
		    						<span>Cena</span>
		    						<span><?php echo $total ?> rsd</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Dostava</span>
		    						<span><?php echo $delivery ?> rsd</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Popust</span>
		    						<span><?php echo $discount ?> rsd</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Ukupna cena</span>
		    						<span><?php echo $total-$discount+$delivery ?> rsd</span>
		    					</p>
								</div>
	          	</div>
	          	<div class="col-md-6">
	          		<div class="cart-detail ftco-bg-dark p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Kartica</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Pouzećem</label>
											</div>
										</div>
									</div>
									
									<p><a href="#"class="btn btn-primary py-3 px-4">Place an order</a></p>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->




          
          </div>

        </div>
      </div>
    </section> 

    <?php include "footer.php"; ?>
    
  

	<?php include "skripte.php"; ?>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		    
		        
		        e.preventDefault();
		        
		        var quantity = parseInt($('#quantity').val());
		        
		        
		            
		            $('#quantity').val(quantity + 1);

		          
		            
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        
		        e.preventDefault();
		        
		        var quantity = parseInt($('#quantity').val());
		        
		        
		      
		            
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

    
  </body>
</html>