<?php
session_start();
if (empty($_SESSION["cart"])) header('Location: ./cart.php');
require_once('./initdb.php');

$cart_items = $conn->getCart($_SESSION['customerID']);
$total = 0;
foreach ($cart_items as $item) {
	$total += $conn->getPriceOfItem($item);
}
$delivery = $conn->getDelivery();
$discount = $conn->getDiscount();
$checkout = $total + $delivery - $discount;

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone']) && isset($_POST['address'])) {
	$time_of_purchase = date('Y-m-d H:i:s');
	$items_ids = json_encode($cart_items);
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$success = $conn->setOrder($name, $surname, $phone, $address, $time_of_purchase, $items_ids, $checkout);
	if ($success == 0) {
		die('Došlo je do greške, molimo Vas da se vratite na <a href="./index.php">Početnu stranicu</a> i pokušate ponovo.');
	}
	$_SESSION['cart'] = [];
	$conn->setCart($_SESSION['customerID'], $_SESSION['cart']);

}
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
				<?php if(isset($success) && $success): ?>
				<div class="col-xl-12 ftco-animate" id="completed" style=" margin-bottom: 20px;">
					<div class="cart-detail cart-total ftco-bg-dark p-3 p-md-2">
						<h3 class="mb-4 billing-heading" style="text-align:center; margin-top: 15px;">Hvala na kupovini</h3>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-xl-12 ftco-animate">

					<!-- FORM START -->
					<form id="order" action="./checkout.php" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
						<h3 class="mb-4 billing-heading">Detalji</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstname">Ime</label>
									<input type="text" name="name" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname">Prezime</label>
									<input type="text" name="surname" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="w-100"></div>


							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Broj telefona</label>
									<input type="tel" name="phone" class="form-control" placeholder="" value="+381 " required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailaddress">Adresa</label>
									<input type="text" name="address" class="form-control" placeholder="" required>
								</div>
							</div>
							<div class="w-100"></div>

						</div>
					</form>
					<!-- FORM END -->



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
									<span><?php echo $checkout ?> rsd</span>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="cart-detail ftco-bg-dark p-3 p-md-4">
								<h3 class="billing-heading mb-4">Način plaćanja</h3>
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

								<p>
									<!-- <a href="#" class="btn btn-primary py-3 px-4">Poruči</a> -->
									<input type="submit" form="order" class="btn btn-primary py-3 px-4" value="Poruči"/>
								</p>
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

</body>

</html>