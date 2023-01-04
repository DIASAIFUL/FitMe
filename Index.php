<?php
session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    
 }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" href="assets/images/favicon.png">
	<link rel="stylesheet"  href="assets/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header class="header-top index-page">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo"><i class="fas fa-dumbbell"></i><span> FitMe</span></div>
					<div class="nh">
					<h6 class="headdertext">A web application to mobilizing the world to achieve a healthy lifestyle.</h6></div>
				</div>
				<div class="col-md-9">
				<?php include 'header.php'; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="header-content">
						<h1><span class="border-bottom">No Pain</span><span class="text-primary"> No Gain</span></h1>
						<p>“The last three or four reps is what makes the muscle grow. 
						This area of pain divides a champion from someone who is not a champion.”- Arnold Schwarzenegger</p>
						
					</div>
				</div>
			</div>
		</div>				
	</header>
	<section class="body-gym-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="body-gym-content">
			  <h5>Believe it or not, you are not alone.  You can get your health back and it’s easier (and less intimidating) than you think. 
			  </h5>
			  <a href="#">learn more about our services</a>
			  <p>We think its of the most importance that you have a risk-free way for you to learn about our methods and see if one of our programs might be a good fit.  Our free consultation and trial give you the opportunity to take our services for a “test drive”.
			  </p>
					</div>
				</div>
			</div>
		</div>
	  </section>   
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="copyright-text">
						<p>© 2022-2023 themexpert Inc. All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>



 <!-- jQuery Js -->
 <script src="assets/js/jquery-3.6.0.min.js"></script>
 <!-- Bootstrap Bundle Js -->
 <script src="assets/js/bootstrap.bundle.min.js"></script> 
 <script src="assets/js/scripts.js"></script>
</body>
</html>