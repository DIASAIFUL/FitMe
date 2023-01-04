<?php

include 'config.php';

session_start();
error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: profile.php");
 }
 
if (isset($_POST['submit'])){
$email=$_POST['email'];
$password=md5($_POST['password']);
$login_check= "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$login_check);

//echo $num;
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['number'] = $row['number'];
   
    header("Location: profile.php");
}else{
    echo "<script>alert('Email and Password Not Matched.')</script>";
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"  href="assets/css/bootstrap.min.css"> 
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
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
	
    <div class="form-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-image">
                        <img src="assets/images/444webp.webp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-area">

                    <form action="" method="post">

                            <div class="row mb-3">
                              <div class="col">
                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                              </div>
                              
                            </div>
                            
                            
                            
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
							<div class="mb-3">
                                <a href="">Forgot Password</a>
                            </div>
                            
                            <div>
                            <button name="submit" class="btn btn-danger">Login</button>

                            </div>

                            <div class="mb-3">
                                <a href="signin.php">Create New Account</a><br>

                                <a href="Dietitians/d_login.php">Dietitians Account</a><br>
                                <a href="admin/a_login.php">admin Account</a>

                            </div>


                          </form>
                    </div>
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

</body>
</html>