<?php
session_start();

include '../config.php';

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

$insert="INSERT INTO user(fname,lname,username,email,number,password) VALUES('$fname','$lname','$username','$email','$number','$password')";
mysqli_query($conn,$insert);
if ($insert) {
	echo "<script>alert('Wow! User Registration successfully Completed.')</script>";
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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="icon" href="../assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-dark text-white" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" placeholder="Enter your name" />
                                        
                                    </div>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"  placeholder="Enter Email" />
                                        
                                    </div>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" id="form3Example4cg"
                                            class="form-control form-control-lg"  placeholder="Password"/>
                                        
                                    </div>

                                    <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                        <input type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg" placeholder="Confirm Password" />
                                        
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-white mt-5 mb-0">Have already an account? <a href="admin_login.php"
                                            class="fw-bold  text-white"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
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

</body>

</html>