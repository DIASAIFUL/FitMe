<?php

include 'config.php';


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
                        <th class="bg-light border-3">number</th>
                        <th class="bg-light border-3">W-Name</th>
                        <th class="bg-light border-3">Message</th>
                        <th class="bg-light border-3">create_time</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!---- connect with datadase------>

                    <?php
            // include 'config.php';

            $sel= "SELECT * FROM `reg-workshop`";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

                    <tr>
                        <td class="bg-light border-3"><?php echo $row['id']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['name']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['email']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['number']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['w_name']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['message']; ?></td>
                        <td class="bg-light border-3"><?php echo $row['create_time']; ?></td>



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