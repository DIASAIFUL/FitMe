<?php
session_start();
error_reporting(0);


include 'config.php';

if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=md5($_POST['password']);

$emptymsg1 = $emptymsg2 = $emptymsg3 = $emptymsg4 = $emptymsg5 = $pasmatchmsg = '';
	
if(empty($fname)){
    $emptymsg1= 'Write Fastname';
}
if(empty($lname)){
    $emptymsg2 = 'Write Lastname';
}
if(empty($username)){
    $emptymsg3 = 'Write username';
}
if(empty($email)){
    $emptymsg4 = 'Write email';
}
if(empty($number)){
    $emptymsg5 = 'Write number ';
}

    $select = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' ") or die('query failed');

   if(mysqli_num_rows($select) > 0){
    echo "<script>alert('Email already exist')</script>";
   }else{
    $insert="INSERT INTO user(fname,lname,username,email,number,password) VALUES('$fname','$lname','$username','$email','$number','$password')";
    $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));
    
    if($result) {
        echo "<script>alert('Wow! User Registration successfully Completed.')</script>";
        echo "<script type='text/javascript'> document.location ='login.php'; </script>";
    }else{
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
    }
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
                    <nav>
                        <ul>
                            <a href="index.php">
                                <li>Home</li>
                            </a>
                            <a href="fitness.html">
                                <li>Fitness Calculator</li>
                            </a>
                            <a href="trainer.html">
                                <li>Gym&Trainers</li>
                            </a>
                            <a href="dietitian.html">
                                <li>Dietitians</li>
                            </a>
                            <a href="blog.html">
                                <li>Blogs</li>
                            </a>
                            <a href="signin.php" class="active">
                                <li>Profile</li>
                            </a>
                            <a href="workshop.html">
                                <li>workshop</li>
                            </a>
                        </ul>
                    </nav>
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
                                    <input type="text" name="fname" class="form-control" placeholder="First Name"
                                        value="<?php if(isset($_POST['submit'])){echo $fname; } ?>">
                                    <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg1."</span>" ?>
                                </div>
                                <div class="col">
                                    <input type="text" name="lname" class="form-control" placeholder="Last name"
                                        value="<?php if(isset($_POST['submit'])){echo $lname; } ?>">
                                    <?php if(isset($_POST['submit'])) echo "<span class='text-red'>".$emptymsg2."</span>" ?>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="name" name="username" class="form-control" id="inputEmail4"
                                    placeholder="Enter your Username"
                                    value="<?php if(isset($_POST['submit'])){echo $username; } ?>">
                                <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg3."</span>" ?>
                            </div>

                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" id="inputEmail4"
                                    placeholder="Enter your Email"
                                    value="<?php if(isset($_POST['submit'])){echo $email; } ?>">
                                <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg4."</span>" ?>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="number" class="form-control" id="inputEmail4"
                                    placeholder="Enter your Number"
                                    value="<?php if(isset($_POST['submit'])){echo $number; } ?>">
                                <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg5."</span>" ?>
                            </div>



                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="password">
                                <?php if(isset($_POST['submit'])) echo "<span class='text-denger'>".$emptymsg5."</span>" ?>
                            </div>

                            <div>
                                <button name="submit" class="btn btn-danger">sign up</button>
                            </div>
                            <div class="mb-3">
                                <a href="login.php">Alrady Have An Account</a>
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