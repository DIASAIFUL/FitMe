<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet"  href="assets/css/bootstrap.min.css"> 
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <style>

.single-trainer-box {
	background: #fff;
	padding: 20px;
	border-radius: 20px;
	height: 620px !important;
	position: relative;
}

/* Facebook */
.fa-facebook-f {
  background: #3B5998;
  color:red;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 9px;
}

  </style>
</head>
<body>

    <header class="header-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo"><i class="fas fa-dumbbell"></i><span> FitMe</span></div>
				</div>
				<div class="col-md-9">
				<?php include 'header.php'; ?>
				</div>
			</div>
		</div>				
	</header>
	<div class="main_trainer">

<div class="container">

	<div class="row gy-3">
	<?php
					include 'config.php';

					$sel= "SELECT * FROM workshop";
					$query=$conn-> query($sel);

					while($row=$query->fetch_assoc()){

					?>
		<div class="col-md-4">

			<div class="single-trainer-box">
				<div class="single-bloger-image">
					<img src="admin/<?php echo $row['image']; ?>">
				</div>
				<h3><?php echo $row['title']; ?></h3>
				<div class="trainer-comtent">
					<p><?php echo $row['content']; ?></p>
				
					<a href="<?php echo $row['link']; ?>" class="fa fa-facebook-f"></a>
						
					<br>
					
					<br>
					
				</div>
				<a href="#">Register</a>
			</div>

		</div>

		<?php
					}
					?>
	</div>
</div>
</div>
</div>

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