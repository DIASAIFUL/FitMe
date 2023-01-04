<?php
    include 'config.php';
    

if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $DietitianName=$_POST['D_Name'];
        $DietitianID=$_POST['D_ID'];
        $v_time=$_POST['D_V_Time'];
        $message=$_POST['message'];
        
       
 




            $insert="INSERT INTO `appointment`(`username`, `number`,`email`, `DietitianName`,`drid`, `VisitingTime`, `Message`) VALUES ('$name','$number','$email','$DietitianName','$DietitianID','$v_time' ,'$message')";
            $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));
            if($result) {
                echo "<script>alert('Wow! Appoinment successfully Completed.')</script>";
                
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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


    <div class="container">


        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Get New Appiontment</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">

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

                                <label for="uname"> Selected Dietitian:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Contact Number"
                                    id="drtitle" name="D_Name"  required>
                                <input type="text" class="form-control" hidden placeholder="Enter Your Contact Number"
                                    id="drid" name="D_ID" required>

                            </div>
                            <div class="form-group">

                                <label for="uname">  Dietitian Visiting Time:</label>
                                <input type="text" class="form-control" placeholder="Enter Your Contact Number"
                                    id="VisitingTime" name="D_V_Time"  required>

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



        <div class="testimonial-area">
            <div class="container">
                <div class="row gy-3">




                    <!---- connect with datadase------>

                    <?php
            

            $sel= "SELECT * FROM `dietitian`";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>
                    <div class="col-md-6">
                        <div class="single-testimonial">
                            <!-- <div class="testimonial-image-area"> -->
                            <div class="testimonial-image">
                                <img src="admin/<?php echo $row['image']; ?>" alt="testimonial">

                            </div>
                            <!-- </div> -->
                            <div class="testimonial-text">
                                <h5><?php echo $row['name']; ?></h5>

                                <p>
                                    <?php echo $row['info']; ?>
                                </p>

                                <p>
                                    Contact Number: <?php echo $row['number']; ?>
                                </p>

                                <p>
                                    <?php echo $row['email']; ?>
                                </p>
                                <p>
                                    <?php echo $row['address']; ?>
                                </p>
                                <p>
                                    Visiting Hours:- <?php echo $row['visiting_time']; ?>
                                </p>

                                <button class="btn btn-danger" data-toggle="modal" data-target="#myModal"
                                    id="openmodalbtnreal" style="opacity:0"> Appiontment</button>
                                <button class="btn btn-danger" id="openmodalbtn"
                                    onclick="setModalData('<?php echo $row['name']; ?>','<?php echo isset($_SESSION['username']); ?>' ,'<?php echo $row['visiting_time']; ?>','<?php echo $row['id']; ?>')">
                                    Appiontment</button>
                            </div>
                        </div>
                    </div>
                    <?php
            }
            ?>


                </div>
            </div>
        </div>

        <!--section class="body-gym-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="body-gym-content">
                        <h5>Believe it or not, you are not alone. You can get your health back and it’s easier (and less
                            intimidating) than you think.
                        </h5>
                        <a href="#">learn more about our services</a>
                        <p>We think its of the most importance that you have a risk-free way for you to learn about our
                            methods and see if one of our programs might be a good fit. Our free consultation and trial
                            give you the opportunity to take our services for a “test drive”.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section-->
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

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Bundle Js -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script>
        function setModalData(name, IssLogin,VisitingTime,drid) {
            if (IssLogin) {
                document.getElementById("drtitle").value = name;
                document.getElementById("VisitingTime").value = VisitingTime;
                document.getElementById("drid").value = drid;
                document.getElementById("openmodalbtnreal").click();
            } else {
                window.location = "login.php";
            }

        }
        </script>
</body>

</html>