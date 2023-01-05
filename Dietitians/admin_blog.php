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
            $uploaded_image = '../uploaded_img/'.$imagename;
            move_uploaded_file($tmp_name,$uploaded_image);

            $insert ="INSERT INTO `blog`(blog_title, blog_content, blog_image) VALUES ('$b_title','$b_content','$uploaded_image')";

            $query=mysqli_query($conn,$insert);

        }else{
            echo "<script>alert(' $insert')</script>";
        }

    
 }
   



?>


>

<?php include 'd_navber.php';?>

    <div class="container">


        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Blog</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" >

                            <div class="form-group">

                                <label for="uname">Title:</label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title" required>


                            </div>
                            <div class="form-group">
                                <label for="pwd">blog Content:</label>
                                <textarea class="form-control" name="content"  cols="5" rows="5" required></textarea>
                                


                            </div>

                            <div class="form-group">
                                <label for="img">Blog Image:</label>
                                
                                <input type="file" name="uploadimage" class="form-control-file border" >
                            </div>
                            <input type="submit" class="btn btn-success"  name="submit" Value="ADD">
                            
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

            <h1>Blog Data</h1>

            <div class="col-md-42 text-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal"> Add</button>
            </div><br>


            <table class="table align-middle mb-0 bg-white">

                <thead class="bg-light border-3">
                    <tr  >
                        <th class="bg-light border-3">SI No</th>
                        <th class="bg-light border-3">Blog Image</th>
                        <th class="bg-light border-3">Blog Title</th>
                        <th class="bg-light border-3">Blog Content</th>
                        <th class="bg-light border-3">Blog Create Date</th>
                       
                    </tr>
                </thead>

                <tbody>

                    <!---- connect with datadase------>

                    <?php
            include 'config.php';

            $sel= "SELECT * FROM blog";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

                    <tr>
                        <td class="bg-light border-3"><?php echo $row['id']; ?></td>
                        <td  class="bg-light border-3"><img src="<?php echo $row['blog_image']; ?>"
                                height='100px' ; weight='100px'></td>
                        <td class="bg-light border-3"><?php echo $row['blog_title']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['blog_content']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['blog_create_date']; ?></td>




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