<?php
session_start();
require_once ('./initdb.php');
// unset($_SESSION["cart"]);


if(isset($_POST['remove_all']) && $_POST['remove_all'] != ""){
	$_SESSION["cart"] = [];
	$conn->setCart($_SESSION['customerID'], $_SESSION['cart']);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Hub | Cart</title>
	<?php include "pocetni-linkovi.php"; ?>
</head>

<body>
	<?php include "nav.php" ?>

	<section class="home-slider owl-carousel" style="height:450px;">

		<div class="slider-item" style="background-image: url(images/cart.jpg);height:500px;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">

					<div class="col-md-7 col-sm-12 text-center ftco-animate" style="margin-top:-200px;">
						<h1 class="mb-3 mt-5 bread">Korpa</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Početna</a></span> <span>Korpa</span></p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div>
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>Proizvod</th>
									<th>Cena</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$total = 0;
								$delivery = $conn->getDelivery();
								$discount = $conn->getDiscount();

								if (!empty($_SESSION["cart"])) {
									$cart = $_SESSION["cart"];
									foreach ($cart as $index => $item) {
										echo "<tr id='" . $index . "' class=\"text-center\">";
										echo "<td class=\"product-remove\"><a href=\"javascript:remove(" . $index . ");\"><span class=\"icon-close\"></span></a></td>";
										echo "<td style=\"width:90%;\" class=\"product-name\"><h3>" . $menu[$item-1]['name'] . "</h3>";
										if ($menu[$item-1]['description'] != '') {
											echo "<p>" . $menu[$item-1]['description'] . "</p></td>";
										} else {
											echo "</td>";
										}
										echo "<td id='price".$index."' style=\"width:10%;\" class=\"price\">" . $menu[$item-1]['price'] . " rsd</td>";
										echo "</tr>";
										$total += (int)$menu[$item-1]['price'];
									}
								}
								
								$show_empty = (empty($_SESSION["cart"])) ? 'table-row' : "none";

									echo "<tr id='empty_cart' style='display: " . $show_empty . ";'>";
									echo "<td></td>";
									echo "<td style=\"width:90%;\" class=\"product-name\"><p>Nemate nista u korpi...</p></td>";
									echo "<td></td>";
									echo "</tr>";
								

								if ($total == 0) {
									$discount = 0;
									$delivery = 0;
								}
								$to_checkout = $total + $delivery - $discount;

								?>


							</tbody>
						</table>
					</div>
				</div>
			</div>
			<form action="cart.php" method="post">
				<input type="hidden" name="remove_all" value="true" />
				<input type="submit" value="Ukloni sve iz korpe" class="btn btn-primary py-2 px-4"/>
			</form>
			<div class="row justify-content-end">
				<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Ukupna Cena</h3>
						<p class="d-flex">
							<span>Cena</span>
							<span id='total'><?php echo $total ?> rsd</span>
						</p>
						<p class="d-flex">
							<span>Dostava</span>
							<span id='delivery'><?php echo $delivery ?> rsd</span>
						</p>
						<p class="d-flex">
							<span>Popust</span>
							<span id='discount'><?php echo $discount ?> rsd</span>
						</p>
						<hr>
						<p class="d-flex total-price">
							<span>Ukupno</span>
							<span id='to_checkout'><?php echo $to_checkout ?> rsd</span>
						</p>
					</div>
					<p class="text-center"><a href="./checkout.php" class="btn btn-primary py-3 px-4">Poruči!</a></p>
				</div>
			</div>
		</div>
	</section>


	<?php include "footer.php"; ?>



	<?php include "skripte.php"; ?>

	<script>
        const remove = (_id) => {
            data = {
                id: _id
            };
            data = JSON.stringify(data);
            fetch('./remove_order.php',{
                method: "POST",
                body: data,
            }).then((response) => {
                response.json().then((data)=> {
                    console.log(data);
					let zero = 1;
					if (data.cart_count != 0) {
						let cart_count = document.getElementById('cart_count');
						cart_count.innerHTML = data.cart_count;
						let cart_count_span = document.getElementById('cart_count_span');
						cart_count_span.style.visibility = 'visible';
					} else {
						let cart_count_span = document.getElementById('cart_count_span');
						cart_count_span.style.visibility = 'hidden';
						document.getElementById('empty_cart').style.display = 'table-row';
						zero = 0;
					}
					let deduct = document.getElementById('price' + data.row_to_remove).innerHTML;
					let amount = parseInt(deduct);
					document.getElementById(data.row_to_remove).remove();

					let total = document.getElementById('total').innerHTML;
					total = parseInt(total);
					let delivery = document.getElementById('delivery').innerHTML;
					let discount = document.getElementById('discount').innerHTML;
					let to_checkout = document.getElementById('to_checkout').innerHTML;
					to_checkout = parseInt(to_checkout);

					document.getElementById('total').innerHTML = total - amount;
					document.getElementById('to_checkout').innerHTML = to_checkout - amount;

					if (zero == 0) {
						document.getElementById('delivery').innerHTML = '0';
						document.getElementById('discount').innerHTML = '0';
						document.getElementById('to_checkout').innerHTML = '0';
					}
					

                });
            })
        }
    </script>
</body>

</html>