<?php

include 'config.php';



    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $content=$_POST['content'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $password=md5($_POST['password']);
        
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

            $insert ="INSERT INTO `trainer`(title,content, email, number,image,password) VALUES ('$title','$content', '$email','$number','$uploaded_image','$password')";

            $query=mysqli_query($conn,$insert);

        }else{
            echo "<script>alert('registeration failed!')</script>";
        }

    
 }
   


 //Notice: Undefined variable: number in C:\xampp\htdocs\fitme final project\admin\view_trainers.php on line 30

?>


>

<?php include 'a_navber.php';?>

<div class="container">


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Trainer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">

                            <label for="uname">Title:</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="title" required>

                        </div>
                        <div class="form-group">
                            <label for="uname">Content:</label>
                            <textarea class="form-control" name="content" cols="5" rows="5" required></textarea>

                        </div>

                        <div class="form-group">

                            <label for="uname">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>

                        </div>



                        <div class="form-group">

                            <label for="uname">Number:</label>
                            <input type="number" class="form-control" placeholder="Enter Number" name="number" Value="+88" required>

                        </div>


                        <div class="form-group">

                            <label for="uname">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" required>

                        </div>


                        <div class="form-group">
                            <label for="img">Trainer Image:</label>

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
    <div class=" col-md-42 container pt-4">

        <h1>Trainers Table </h1>

        <div class="col-md-42 text-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Add</button>
        </div><br>


        <table class="table align-middle mb-0 bg-white">

            <thead class="bg-light border-3">
                <tr>
                    <th class="bg-light border-3">SI No</th>
                    <th class="bg-light border-3"> Image</th>
                    <th class="bg-light border-3"> Title</th>
                    <th class="bg-light border-3"> Content</th>
                    <th class="bg-light border-3"> Email</th>
                    <th class="bg-light border-3"> Number</th>
                    <th class="bg-light border-3"> Create Date</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <!---- connect with datadase------>

                <?php
            include 'config.php';

            $sel= "SELECT * FROM trainer";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

                <tr>
                    <td class="bg-light border-3"><?php echo $row['id']; ?></td>
                    <td class="bg-light border-3" style="height='20px'; weight='200px'"><img
                            src="<?php echo $row['image']; ?>" height='200px' ; weight='200px'></td>
                    <td class="bg-light border-3"><?php echo $row['title']; ?></td>
                    <td class="bg-light border-3"><?php echo $row['content']; ?></td>
                    <td class="bg-light border-3"><?php echo $row['email']; ?></td>
                    <td class="bg-light border-3"><?php echo $row['number']; ?></td>
                    <td class="bg-light border-3"><?php echo $row['Createdate']; ?></td>



                    <td>
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">DELETE</a>
                    </td>
                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</main>
<!--Main layout-->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>