<?php 

session_start();
error_reporting(0);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
                        
							
                            <div class="row mb-3">

								<h1 style="color:white"> Welcome <?php echo  $_SESSION['username']; ?></h1>

								<br><br>
                                <div class="col">
                                    <label for=""  class="form-control" > <?php echo  $_SESSION['fname']; ?> </label>
                                        
                                    
                                </div>
                                <div class="col">
                                    <label for="" class="form-control"> <?php echo  $_SESSION['lname']; ?></label>
                                   
                                </div>

                            </div>
                            <div class="mb-3">
                               <label for="" class="form-control"> <?php echo  $_SESSION['username']; ?></label>
                               
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-control" id="inputEmail4" > <?php echo  $_SESSION['email']; ?> </label> 
                                
                            </div>
                            <div class="mb-3">
							<label for="" class="form-control" id="inputEmail4" > <?php echo  $_SESSION['number']; ?></label> 
                              
                            </div>


                            <div>
                                <a href="logout.php"><button name="submit" class="btn btn-danger">Logout</button></a>
                            </div>
                            <div class="mb-3">
                                <a href="login.php">Create Another Account</a>
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