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
<!---- header------>
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




     <!---- connect with datadase------>




                        <div class="main_bloger">
                            <div  class="container ">
                                <div class="row gy-3">
                                <?php
            include 'config.php';

            $sel= "SELECT * FROM blog";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>
                                    <div class="col-md-3">
                                        <div class="single-bloger-box ">
                                            <div class="single-bloger-image">
                                                <img src="admin/<?php echo $row['blog_image']; ?>">
                                            </div>
                                            <div class="">
                                                <h4>Article</h4>
                                                <h3><a href="#"> <?php echo $row['blog_title']; ?></a></h3>
                                                
                                                <div class="bloger-comtent">
                                                    <p> <?php echo $row['blog_content']; ?></p>
                                                    
                                                </div>

                                                 <label id="label"><p><?php echo formatDate3($row['blog_create_date']); ?></p></label>
                                            </div> 
                                        </div>

                                    </div>
                                    <?php
            }
            ?>

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