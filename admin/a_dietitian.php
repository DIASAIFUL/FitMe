<?php
session_start();
error_reporting(0);


include 'config.php';

if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $info=$_POST['info'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $v_time=$_POST['v_time'];
        $password=md5($_POST['cpassword']);
        $imge=$_FILES['uploadimage'];

        $imagename = $imge['name'];
        $imageerror= $imge ['error'];
        $tmp_name = $imge['tmp_name'];
 
        

        $imageext=explode('.',$imagename);
        $imagecheak= strtolower(end($imageext));

        $imageextstored = array('png','jpg','jpeg',);

        if(in_array($imagecheak, $imageextstored)){
            $uploaded_image = '../uploaded_img/'.$imagename;
            move_uploaded_file($tmp_name,$uploaded_image);

            $select ="SELECT * FROM `dietitian` WHERE email = '$email' AND number ='$number' ";
            $query = mysqli_query($conn, $select);

            if(mysqli_num_rows($query) > 0){
                echo "<script>alert('Email already exist')</script>";
               }else{

            $insert="INSERT INTO `dietitian`(`name`, `info`, `number`, `email`, `address`, `visiting_time`, `image`,`password`) VALUES ('$name','$info','$number','$email','$address','$v_time','$uploaded_image','$password')";
            $result = mysqli_query($conn, $insert) or die(mysqli_error($conn));
            }
            
         } else{
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
        

    }
?>



<?php include 'a_navber.php';?>

<div class="container">


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Dietitian</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">

                            <label for="uname">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>

                        </div>
                        <div class="form-group">
                            <label for="pwd">Information:</label>
                            <textarea class="form-control" name="info" cols="5" rows="5" required></textarea>

                        </div>

                        <div class="form-group">

                            <label for="uname">Number:</label>
                            <input type="text" class="form-control" placeholder="Enter Your Contact Number" name="number"
                                required>

                        </div>

                        <div class="form-group">

                            <label for="uname">Email:</label>
                            <input type="text" class="form-control" placeholder="Enter Your Email" name="email"
                                required>

                        </div>

                        <div class="form-group">

                            <label for="uname">Address:</label>
                            <input type="text" class="form-control" placeholder="Enter Your Address" name="address"
                                required>

                        </div>

                        <div class="form-group">

                            <label for="uname">Visiting Hours:</label>
                            <input type="text" class="form-control" placeholder="Enter Your Name" name="v_time" required>

                        </div>
                        <div class="form-group">

                            <label for="uname">Password:</label>
                            <input type="passsword" class="form-control" placeholder="Enter Your Name" name="password" required>

                        </div>
                        


                        <div class="form-group">
                            <label for="img">Blog Image:</label>

                            <input type="file" name="uploadimage" class="form-control-file border">
                        </div>
                        <input type="submit" class="btn btn-success" name="submit" Value="ADD">

                    </form>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

</div>



<!--Main layout-->
<main style="margin-top: 58px">
    <div class=" col-md-30 container pt-4">

        <h1>Dietttian Data</h1>

        <div class="col-md-30 text-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Add</button>
        </div><br>


        <table class="table align-middle mb-0 bg-white">

            <thead class="bg-light border-3">
                <tr>
                    <th class="bg-light border-2">SI No</th>
                    <th class="bg-light border-2">Image</th>
                    <th class="bg-light border-2">Name</th>
                    <th class="bg-light border-2">Information</th>
                    <th class="bg-light border-2">Number</th>
                    <th class="bg-light border-2">Email</th>
                    <th class="bg-light border-2">Address</th>
                    <th class="bg-light border-2">Visiting Hours</th>
                    <th class="bg-light border-2">Create Date</th>
                    <th class="bg-light border-2">Action</th>
                </tr>
            </thead>

            <tbody>

                    <!---- connect with datadase------>

                    <?php
            include 'config.php';

            $sel= "SELECT * FROM dietitian";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

                    <tr>
                        <td class="bg-light border-2"><?php echo $row['id']; ?></td>
                        <td  class="bg-light border-2"><img src="<?php echo $row['image']; ?>"
                                height='100px' ; weight='100px'></td>
                        <td class="bg-light border-2"><?php echo $row['name']; ?></td>
                        <td class="bg-light border-2"><?php echo $row['info']; ?></td>
                        <td class="bg-light border-2"><?php echo $row['number']; ?></td>
                        <td class="bg-light border-2"><?php echo $row['email']; ?></td>
                        <td class="bg-light border-2"><?php echo $row['address']; ?></td>
                        <td class="bg-light border-2"><?php echo $row['visiting_time']; ?></td>
                        <td class="bg-light border-2"><?php echo $row['acc_create_date']; ?></td>



                        <td>
                            <a href="" class="btn btn-primary"> Edit  </a>
                            <br><br>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    <?php
            }
            ?>
                </tbody>
                <tfooter class="bg-light border-3">
                <tr>
                    <th class="bg-light border-2">SI No</th>
                    <th class="bg-light border-2">Image</th>
                    <th class="bg-light border-2">Name</th>
                    <th class="bg-light border-2">Information</th>
                    <th class="bg-light border-2">Number</th>
                    <th class="bg-light border-2">Email</th>
                    <th class="bg-light border-2">Address</th>
                    <th class="bg-light border-2">Visiting Hours</th>
                    <th class="bg-light border-2">Create Date</th>
                    <th class="bg-light border-2">Action</th>
                </tr>
            </tfooter>

        </table>
    </div>
</main>
<!--Main layout-->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>