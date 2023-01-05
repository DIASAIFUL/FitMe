
<?php
    include 'config.php';
    

if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $w_name=$_POST['w-name'];
        $message=$_POST['message'];;

       
 




            $insert="INSERT INTO `reg-workshop`(`name`, `number`,`email`,`w_name`,`message`) VALUES ('$name','$number','$email','$w_name','$message')";
            $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));
            if($result) {
                echo "<script>alert('Wow!  request  successfully Send , Wait for Update.')</script>";
                
            }else{
                echo "<script>alert('Woops! Something Wrong Went.')</script>";
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

.single-trainer-box .w-btn {
    text-align: center;
    font-weight: 600;
    background: red;
    padding: 10px 10px;
    border-radius: 10px;
    transition: .5s;
    text-transform: capitalize;
    color: #fff;
    width: 135px;
    position: absolute;
    bottom: 25px;
    left: 50%;
    transform: translateX(-50%);
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


    <div class="container">


        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Get New workshop</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" >

                            <div class="form-group">

                                <label for="uname">Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo  $_SESSION['username']; ?>" required>


                            </div>
                            <div class="form-group">


                                <label for="uname">Number:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Contact Number" value="<?php echo  $_SESSION['number']; ?>"
                                    name="number" required>


                            </div>

                            <div class="form-group">

                                <label for="uname">Email:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Email" name="email" value="<?php echo  $_SESSION['email']; ?>" required>

                            </div>

                            <div class="form-group">

                                <label for="uname">Message:</label>
                                <textarea class="form-control" name="message" cols="5" rows="5" required></textarea>


                            </div>

                            <div class="form-group">

                                <label for="uname"> Type workshop Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Your  Wrkshop number"
                                    id="drtitle" name="w-name"  required><br>
                                

                            </div>


                            <input type="submit" class="btn btn-success" name="submit" Value="ADD">

                        </form>



                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>


<div class="container">

	<div class="row gy-3">
	<?php


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
				<button class="btn btn-denger w-btn" data-toggle="modal" data-target="#myModal" > Register</button>

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


<!-- <script>
        function setModalData(name, IssLogin) {
            if (IssLogin) {
                document.getElementById("drtitle").value = name;
                document.getElementById("openmodalbtnreal").click();
            } else {
                window.location = "login.php";
            }

        }
        </script> -->
<!-- jQuery Js -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Bundle Js -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>