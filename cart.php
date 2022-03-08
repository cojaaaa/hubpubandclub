<?php
session_start();
require_once ('./initdb.php');

$status = "";
if (isset($_GET["remove_item"]) && $_GET["remove_item"] != "") {
	unset($_SESSION["cart"][$_GET["remove_item"]]);
	$status = "";
}

if(isset($_POST['remove_all']) && $_POST['remove_all'] != ""){
	unset($_SESSION["cart"]);
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
								$delivery = 200;
								$discount = 50;

								if (!empty($_SESSION["cart"])) {
									$cart = $_SESSION["cart"];
									foreach ($cart as $index => $item) {
										echo "<tr class=\"text-center\">";
										echo "<td class=\"product-remove\"><a href=\"./cart.php?remove_item=" . $index . "\"><span class=\"icon-close\"></span></a></td>";
										echo "<td style=\"width:90%;\" class=\"product-name\"><h3>" . $menu[$item-1]['name'] . "</h3>";
										if ($menu[$item-1]['description'] != '') {
											echo "<p>" . $menu[$item-1]['description'] . "</p></td>";
										} else {
											echo "</td>";
										}
										echo "<td style=\"width:10%;\" class=\"price\">" . $menu[$item-1]['price'] . " rsd</td>";
										echo "</tr>";
										$total += (int)$menu[$item-1]['price'];
									}
								}
								
								if (empty($_SESSION["cart"])) {
									echo "<tr>";
									echo "<td></td>";
									echo "<td style=\"width:90%;\" class=\"product-name\"><p>Nemate nista u korpi...</p></td>";
									echo "<td></td>";
									echo "</tr>";
								}

								if ($total == 0) {
									$discount = 0;
									$delivery = 0;
								}

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
							<span>Ukupno</span>
							<span><?php echo $total + $delivery - $discount ?> rsd</span>
						</p>
					</div>
					<p class="text-center"><a href="checkout.php?total=<?php echo $total ?>&delivery=<?php echo $delivery ?>&discount=<?php echo $discount ?>" class="btn btn-primary py-3 px-4">Poruči!</a></p>
				</div>
			</div>
		</div>
	</section>



	<?php include "footer.php"; ?>



	<?php include "skripte.php"; ?>


</body>

</html>