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




                        <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
        <table class="table align-middle mb-0 bg-white">
            <h1 style="color:white">Appoinment History</h1>
        <thead class="bg-light">
            <tr>
                <th>SI No</th>
                <th> Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Dietitian Name</th>
                <th> Dietitian Visiting Hours</th>
                <th> Message </th>
                <th> Appoinment Request Date </th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            <!---- connect with datadase------>

            <?php
            include 'config.php';
            $email= $_SESSION['email'];
            $sel= "SELECT * FROM  appointment where email='$email'";
            $query=$conn-> query($sel);
            if($query->rowCount() > 0){
                
            }while($row=$query->fetch_assoc()){

                    ?>
        
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['DietitianName']; ?></td>
                        <td><?php echo $row['VisitingTime']; ?></td>
                        <td><?php echo $row['Message']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['appointment_time']; ?></td>
                        
                    </tr>
        
            
            
            <?php
            }
            ?>
        </tbody>
    </table>
        </div>
    </main>
    <!--Main layout-->



    
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