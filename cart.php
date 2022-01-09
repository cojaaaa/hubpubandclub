<?php
session_start();
include_once "database.php";

$status = "";
if (isset($_GET["remove_jela"]) && $_GET["remove_jela"] != "") {
	$rem_jela = $_GET["remove_jela"];
	unset($_SESSION["cart"][$rem_jela]);
	$status = "";
}
$status = "";
if (isset($_GET["remove_pica"]) && $_GET["remove_pica"] != "") {
	$rem_pica = $_GET["remove_pica"];
	unset($_SESSION["cart2"][$rem_pica]);
	$status = "";
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
									<th>Proizvod</th>
									<th>Cena</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$total=0;
								$delivery=200;
								$discount=50;
								if (!empty($_SESSION["cart"])) {
									$array_items = $_SESSION["cart"];
									foreach ($array_items as $index => $item) {
										echo "<tr class=\"text-center\">";
										echo "<td class=\"product-remove\"><a href=\"./cart.php?remove_jela=" . $index . "\"><span class=\"icon-close\"></span></a></td>";
										echo "<td style=\"width:90%;\" class=\"product-name\"><h3>" . $array_jela[$item - 1]->getName() . "</h3>";
										echo "<p>" . $array_jela[$item - 1]->getDescription() . "</p></td>";
										echo "<td style=\"width:10%;\" class=\"price\">" . $array_jela[$item - 1]->getPrice() . " rsd</td>";
										echo "</tr>";
										$total += $array_jela[$item - 1]->getPrice();
									}
								} 
								if (!empty($_SESSION["cart2"])) {
									$array_items = $_SESSION["cart2"];
									foreach ($array_items as $index => $item) {
										echo "<tr class=\"text-center\">";
										echo "<td class=\"product-remove\"><a href=\"./cart.php?remove_pica=" . $index . "\"><span class=\"icon-close\"></span></a></td>";
										echo "<td style=\"width:90%;\" class=\"product-name\"><h3>" . $array_pica[$item - 1]->getName() . "</h3></td>";
										echo "<td style=\"width:10%;\" class=\"price\">" . $array_pica[$item - 1]->getPrice() . " rsd</td>";
										echo "</tr>";
										$total += $array_pica[$item - 1]->getPrice();
									}
								} 
								if (empty($_SESSION["cart"]) && empty($_SESSION["cart2"])) {
									echo "<tr>";
									echo "<td></td>";
									echo "<td style=\"width:90%;\" class=\"product-name\"><p>Nemate nista u korpi...</p></td>";
									echo "<td></td>";
									echo "</tr>";
								}

								if ($total == 0) {
									$discount=0;
									$delivery=0;
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
							<span><?php echo $total-$delivery+$discount ?> rsd</span>
						</p>
					</div>
					<p class="text-center"><a href="checkout.php?total=<?php echo $total ?>&delivery=<?php echo $delivery ?>&discount=<?php echo $discount ?>" class="btn btn-primary py-3 px-4">Poruči!</a></p>
				</div>
			</div>
		</div>
	</section>



	<?php include "footer.php"; ?>



	<!-- loader -->
	<?php include "skripte.php"; ?>


</body>

</html>