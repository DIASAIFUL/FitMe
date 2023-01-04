
<?php

    include 'config.php';
    session_start();
    error_reporting(0);

           $email= $_SESSION['email'];

            $select ="SELECT * FROM `booked` WHERE email = '$email' ";
            $query = mysqli_query($conn, $select);
           
            $res = [];

            while($row = mysqli_fetch_assoc($query)) {
                $res[] = $row;
            }
            // echo '<pre>'; print_r($res); echo '</pre>';
          


               if(isset($_GET['email'])){
        $name=$_GET['name'];
       
        $email=$_GET['email'];

        $trainerId=$_GET['trainerId'];
        


            
               $insert="INSERT INTO `booked`(`name`, `email`, `trainerId`) VALUES ('$name','$email','$trainerId')";
              $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));
              header('location:trainer.php');
            

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
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
<style>
  a.btnnone {
    background-color: gray;
    pointer-events: none;
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
					//include 'config.php';

					$sel= "SELECT * FROM `trainer` WHERE ";
					$query=$conn-> query($sel);

					while($row=$query->fetch_assoc()){
            $alradyemailtaken=in_array($row['id'], array_column($res, 'trainerId'));

 
                        ?>
                  <div class="col-md-4">

                    <div class="single-trainer-box">
                      <div class="single-trainer-image">
                        <img src="admin/<?php echo $row['image']; ?>">
                      </div>
                      <h3><?php echo $row['title']; ?></h3>
                      <div class="trainer-comtent">
                        <p><?php echo $row['content']; ?></p>
                        <a
                          href="milato:<?php echo $row['email']; ?>"><span>Email:</span><?php echo $row['email']; ?></a>
                        <br>
                        <a href="tel:1780094244"><span>Tel: </span><?php echo $row['number']; ?></a>
                      </div>
                        <?php
                        if (isset($_SESSION['username'])) {
                          
                          
                          ?>
                          <a class="<?php echo  $alradyemailtaken==1?"btnnone":""; ?>"  href="trainer.php?email=<?php echo  $_SESSION['email']; ?>&name=<?php echo  $_SESSION['username']; ?>&trainerId=<?php echo $row['id'] ?>"><?php echo  $alradyemailtaken==1?"Alrady Booked":"Appoinment"; ?></a>
                          <?php
                          
                          }else{
                            
                            ?>
                            <a  href="login.php">Appoinment</a>
                            <?php 
                          }
                          ?>
                      </div>

                    </div>

	  	<?php
					}
					?>
	</div>
</div>
</div>
</div>
 
    <!--
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/Burn.jpg">
              </div>
              <h3>Burn Out Fitness</h3>
              <div class="trainer-comtent">
                <p>Burn Out Fitness is a both online and offline Gym/ Physical Ffitness center.It is also specialized in Yoga</p>                 
                <a href="milato:Burnoutfitnessbysabrina@gmail.com"><span>Email: </span>Burnoutfitnessbysabrina@gmail.com</a>
                <br>               
                <a href="tel:01784635030"><span>Tel: </span>01784635030</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/Active.jpg">
              </div>
              <h3>SheActive</h3>
              <div class="trainer-comtent">
                <p>SheActive is a female based health and wellness related online center. </p>                 
                <a href="mailto:sadia.sheactive@gmail.com"><span>Email: </span>sadia.sheactive@gmail.com</a>
                <br>               
                <a href="tel:01758743337"><span>Tel: </span>01758743337</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/sharmin.jpg">
              </div>
              <h3>Sharmin's Online Fitness Studio</h3>
              <div class="trainer-comtent">
                <p>Sharmin's online Fitness Studio is an online based female ftness center.we provide diet chart and coach fitness classes.</p>                 
                <a href="mailto:ssharmin422@gmail.com"><span>Email: </span>ssharmin422@gmail.com</a>
                <br>               
                <a href="tel:01817226852"><span>Tel: </span>01817226852</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/lia.jpg">
              </div>
              <h3>Lia's Yoga and Fitness Hub</h3>
              <div class="trainer-comtent">
                <p>Lia's Yoga and Fitness Hub is a online based fitness and Yoga center only for female.</p>                 
                <a href="mailto:liafitness@gmail.com"><span>Email: </span>liafitness@gmail.com</a>
                <br>               
                <a href="tel:01750497673"><span>Tel: </span>01750497673</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/inspiron.jpg">
              </div>
              <h3>Inspiron Fitness,Diet Center</h3>
              <div class="trainer-comtent">
                <p>inspiton is a online and offline both fitness and diet consultency center.</p>                 
                <a href="mailto:inspiratonfitness@gmail.com"><span>Email: </span>inspiratonfitness@gmail.com</a>
                <br>               
                <a href="tel:0194295054"><span>Tel: </span>0194295054</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/trainer3.jpg">
              </div>
              <h3>Ethan</h3>
              <div class="trainer-comtent">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor consequat.Duis aute irure dolor</p>                 
                <a href="mailto:xxxxx@email.com"><span>Email: </span>xxxxx@email.com</a>
                <br>               
                <a href="tel:880+0011555"><span>Tel: </span>880+017xxxxxxx</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/trainer3.jpg">
              </div>
              <h3>Ethan</h3>
              <div class="trainer-comtent">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor consequat.Duis aute irure dolor ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure </p>                 
                <a href="mailto:xxxxx@email.com"><span>Email: </span>xxxxx@email.com</a>
                <br>               
                <a href="tel:880+0011555"><span>Tel: </span>880+017xxxxxxx</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="single-trainer-box">
              <div class="single-trainer-image">
                <img src="assets/images/trainer3.jpg">
              </div>
              <h3>Ethan</h3>
              <div class="trainer-comtent">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation </p>                 
                <a href="mailto:xxxxx@email.com"><span>Email: </span>xxxxx@email.com</a>
                <br>               
                <a href="tel:880+0011555"><span>Tel: </span>880+017xxxxxxx</a>
              </div>
              <a href="#">appointment</a>
            </div>
          </div>
        </div-->

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