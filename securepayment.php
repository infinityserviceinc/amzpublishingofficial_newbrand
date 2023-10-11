<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/get-dashboard.php");
ob_start();
session_start();

date_default_timezone_set("Asia/Karachi");
$phpSelf = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);

// if(isset/)
if (!isset($_REQUEST['TOKEN'])) {
	header('location:/');
	exit();
}
$token = $_REQUEST['TOKEN'];
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "$dashboardUrl/leads/$token",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		'Content-Type: application/json',

	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$dataLeads = json_decode($response);
// var_dump($dataLeads->brand);
// die();
if ($response == "") {
	header('location:/');
	exit();
}

$lead_id = $dataLeads->id;
$user_id = $dataLeads->user_id;
$fname = $dataLeads->fname;
$lname = $dataLeads->lname;
$phonenumber = $dataLeads->phonenumber;
$email = $dataLeads->email;
$address = $dataLeads->address;
$amount = $dataLeads->amount;
$zipcode = $dataLeads->zipcode;
$description = $dataLeads->description;
$currency = $dataLeads->currency;
$_SESSION['description'] = $description;
$_SESSION['setprice'] = $amount;
$_SESSION['user_id'] = $user_id;
$_SESSION['lead_id'] = $dataLeads->id;
$_SESSION['name'] = $dataLeads->fname . " " . $dataLeads->lname;

if ($currency == "USD") {
	$symbol = "$";
} elseif ($currency == "GBP") {
	$symbol = "£";
} elseif ($currency == "AUD") {
	$symbol = "A$";
} elseif ($currency == "CAD") {
	$symbol = "C$";
} elseif ($currency == "EUR") {
	$symbol = "€";
}

// var_dump($_SESSION['setprice']);
// die();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<?php
	if (isset($_SERVER['HTTPS'])) {
		$requesMet = "https";
	} else {
		$requesMet = "http";
	}

	?>
	<base href="<?php echo $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">
	<?php

	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$brandurl = array(
		'brandurl' => $dataLeads->brand
	);
	$brandurl = json_encode($brandurl);

	?>

	<!doctype html>
	<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<head>
		<title>AMZ Publishing Official</title>
		<meta name="description" content="">


		<?php include_once('includes/head.php'); ?>

		<style>
			.inner_bg {
				background-size: cover !important;
				padding: 256px 0;
				position: relative;
				background-position: center right !important;
			}

			.main_nav {
				position: absolute;
				z-index: 999;
				width: 100%;
				top: 0;
				background-color: #0000004f;
				padding: 15px 0;
			}

			body {
				font-family: "Nunito";
			}

			.containerCheckBox span {
				font-size: 14px;
			}

			a:hover {
				text-decoration: none;
			}

			.section1 {
				background-image: url(../img/section1/checkout.jpg);
				background-size: cover;
				background-repeat: no-repeat;
				min-height: 350px;
				padding-bottom: 108px;
			}

			.section2 {
				background: none;
				color: black;
			}

			.paymentHeading {
				color: green;
				font-family: "Nunito";
				font-weight: 600;
			}

			.paymentTabs {
				margin-top: 40px;
			}

			.tab {
				padding: 20px 10px;
				border: 3px solid #b0aeae;
				border-radius: 10px;
				margin: 0 auto;
				text-align: center;
				transition: .4s ease-in-out;
			}

			.tab:hover {
				border: 3px solid green;
				transition: .4s ease-in-out;
			}

			.tab.active {
				border: 3px solid green;

			}

			.tab.active::before {
				font-family: "FontAwesome";
				position: absolute;
				right: 0;
				top: -20px;
				content: "\f058";
				font-size: 40px;
				font-weight: 200;
				color: green;
				background: white;
				height: 40px;

			}

			.paymentDescription {
				font-size: 18px;
				font-weight: 800;
				font-family: "Nunito";
				color: #b0aeae;
				transition: .4s ease-in-out;
			}

			.tab.active .paymentDescription {
				color: green;
			}

			.tab:hover .paymentDescription {
				color: green;
				transition: .3s ease-in-out;
			}

			.myCardPay {
				background: #fcfcfc;
				margin-top: 40px;
				width: 100% !important;
			}

			.card-heading {
				text-align: center;
				font-family: "Nunito";
				font-weight: 800;
				font-size: 23px;
			}

			.submitPay {
				font-size: 20px;
				font-weight: 700;
				font-family: "Nunito";
				padding: 18px 50px;
			}

			.authorizeForm * {
				font-family: "Nunito";
			}

			label {
				float: left !important;
			}

			@media (max-width: 767px) {
				.card-body {
					padding-left: 50px !important;
					padding-right: 50px !important;
				}

				.myContainer {
					margin-top: 10px !important;
				}


				.table td,
				.table th {

					font-size: 9px !important;
				}



			}
		</style>
	</head>

<body>

	<header>

		<div class="main_nav">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand logo" href="/" data-aos="fade-down" data-aos-duration="1000"> <img class="img-fluid" src="images/slogo.png" alt="" style="width:90px"> </a>

				</nav>
			</div>
		</div>
	</header>

	<div class="about_area inner_bg" style="background-image:url('https://www.wiki-pros.com/images/about_bg.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h2 class="inner_title" data-aos="fade-up" data-aos-duration="1000" style="color:white;">Complete Your Payment</h2>
				</div>
			</div>
		</div>
	</div>



	<!------ Include the above in your HEAD tag ---------->

	<!-- Tabs -->
	<section id="tabs" style="margin-top:-100px">
		<div class="container">
			<div class="mt-2 mb-4">
				<div class="cardInfo">
					<div class="card myCardPay">
						<div class="card-header text-center text-black">
							<h2 class="card-heading" style="color:black;">Invoice from AMZ Publishing Official</h2>
							<p style="color:black;">Billed to <?php echo $dataLeads->fname; ?> <?php echo $dataLeads->lname; ?></p>
						</div>
						<div class="card-body text-center" style="padding-left:200px;padding-right:200px">
							<img style="max-width:300px !important" src="https://www.ghostwritingfounder.com/img/icons/visa_mastercard.png" alt="stripe payment icon">
							<h2 class="card-heading">Credit Or Debit Card </h2>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">First Name</label>
										<input readonly type="text" name="fname" id="fname" value="<?php echo $dataLeads->fname; ?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Last Name</label>
										<input readonly type="text" name="lname" id="lname" value="<?php echo $dataLeads->lname; ?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Email</label>
										<input readonly type="text" name="email" id="email" value="<?php echo $dataLeads->email; ?>" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Phone Number</label>
										<input readonly type="text" name="phonenumber" id="phonenumber" value="<?php echo $dataLeads->phonenumber; ?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="text-center">
										<br>
										<button class="btn btn-success submitPay" onclick="window.location.href='<?= $dataLeads->direct_charge_url ?>'">Finish and Pay</button>
									</div>
								</div>
							</div>
						</div>
						<?php
						if (isset($_REQUEST['TOKEN'])) {
						?>
							<div class="p-4">
								<table class="table table-border table-hover ">
									<tr>
										<th>Address</th>
										<th>zipcode</th>
										<th>Description</th>
										<th>Amount</th>
									</tr>
									<tr>
										<td><?php echo $address ?></td>
										<td><?php echo $zipcode ?></td>
										<td><?php echo $description ?></td>
										<td><b><?php echo $symbol . ' ' . $amount ?>.00</b></td>
									</tr>
									<tr>

										<td></td>
										<td></td>
										<td>Total Amount: </td>
										<td><b><?php echo $symbol . ' ' . $amount ?>.00</b></td>
									</tr>
								</table>

							</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- ./Tabs -->

	<!-- <script src="js/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js"></script>


	<script>
		$("#btnNav").click(function() {
			var nav = $(".navMobile");
			$('.navMobile').toggle();
		})
		<?php
		if (isset($_SESSION['paymentSuccess'])) {
		?>
			swal('Payment SuccessFully Done!');
		<?php
			session_destroy();
		}
		if (isset($_REQUEST['error'])) {
			$url = $_REQUEST['TOKEN'];
		?>

			swal({
				title: "Error",
				text: "<?php echo $_REQUEST['error']; ?>",
				icon: "warning",

			}).then(function(isConfirm) {
				if (isConfirm) {
					window.location.href = "securitypayment.php?TOKEN=<?php echo $_REQUEST['TOKEN']; ?>";
				} else {
					//if no clicked => do something else
				}
			});

		<?php
		}

		?>
	</script>

	<script>
		$(document).ready(function() {
			$(window).scroll(function(event) {
				var scroll = $(window).scrollTop();
				if (scroll > 80) {
					$('#navbar').addClass('sticky');
				} else {
					$('#navbar').removeClass('sticky');
				}
			});
			$("#payment-form").submit(function(e) {
				$('.submitPay').prop('disabled', true);
			});
		});
	</script>

	<?php

	if (isset($_GET['successMsg'])) {
		echo "<script>swal('Done','" . $_GET['successMsg'] . "','success')</script>";
	} else if (isset($_GET['errorMsg'])) {
		echo "<script>swal('Error','" . $_GET['errorMsg'] . "','warning')</script>";
	}

	?>


</body>

</html>