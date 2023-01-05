<?php

include 'config.php';



    if(isset($_POST['submit'])){
        $b_title=$_POST['title'];
        $b_content=$_POST['content'];
        
        $imge=$_FILES['uploadimage'];

        $imagename = $imge['name'];
        $imageerror= $imge ['error'];
        $tmp_name = $imge['tmp_name'];
 
        

        $imageext=explode('.',$imagename);
        $imagecheak= strtolower(end($imageext));

        $imageextstored = array('png','jpg','jpeg',);

        if(in_array($imagecheak, $imageextstored)){
            $uploaded_image = 'uploaded_img/'.$imagename;
            move_uploaded_file($tmp_name,$uploaded_image);

            $insert ="INSERT INTO `blog`(blog_title, blog_content, blog_image) VALUES ('$b_title','$b_content','$uploaded_image')";

            $query=mysqli_query($conn,$insert);

        }else{
            echo "<script>alert(' $insert')</script>";
        }

    
 }
   



?>


>

<?php include 'a_navber.php';?>

    <div class="container">



    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class=" col-md-42 container pt-4">

            <h1>Viwe traineer Appoinment</h1>

            <table class="table align-middle mb-0 bg-white">

                <thead class="bg-light border-3">
                    <tr  >
                        <th class="bg-light border-3">SI No</th>
                        <th class="bg-light border-3">Name</th>
                        <th class="bg-light border-3">Email</th>
                        <th class="bg-light border-3">trainerId</th>
                        <th class="bg-light border-3">Booking Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!---- connect with datadase------>

                    <?php
            include 'config.php';

            $sel= "SELECT * FROM booked";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

                    <tr>
                        <td class="bg-light border-3"><?php echo $row['id']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['name']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['email']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['trainerId']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['BookingDate']; ?></td>



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