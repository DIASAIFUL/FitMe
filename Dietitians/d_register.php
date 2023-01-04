

<?php

include 'config.php';
error_reporting(0);

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $info = mysqli_real_escape_string($conn, $_POST['info']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $v_time = mysqli_real_escape_string($conn, $_POST['v_time']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../upload_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `dietitian` WHERE email = '$email' ") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Email already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `dietitian`(`name`, `info`, `number`, `email`, `address`, `visiting_time`, `image`,`password`) VALUES('$name','$info','$number','$email','$address','$v_time', '$image' ,'$pass')") or die('query failed');
         
         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            echo "<script type='text/javascript'> document.location ='d_login.php'; </script>";
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../assets/css/user_profile_style.css">

</head>

<body>

    <div class="form-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>register now</h3>
            <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
            <input type="text" name="name" placeholder="Enter Name" class="box" required>
            <textarea class="box" name="info" cols="3" rows="3" placeholder="Enter your Information"
                required></textarea>
            <input type="email" name="email" placeholder="Enter email" class="box" required>

            <input type="text" class="box" placeholder="Enter Your Contact Number" name="number" required>

            <input type="text" class="box" placeholder="Enter Your Address" name="address" required>

            <input type="text" class="box" placeholder="Enter Your Visiting Hours" name="v_time" required>

            <input type="password" name="password" placeholder="Enter password" class="box" required>
            <input type="password" name="cpassword" placeholder="Enter cpassword" class="box" required>

            <input type="file" name="image" class="box" >

            <input type="submit" name="submit" value="register now" class="btn">

            <p>already have an account? <a href="d_login.php">login now</a></p>
        </form>

    </div>

</body>

</html>