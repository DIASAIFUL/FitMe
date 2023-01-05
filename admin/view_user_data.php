<?php include 'a_navber.php';?>



    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
        <table class="table align-middle mb-0 bg-white">
            <h1>User Data</h1>
        <thead class="bg-light">
            <tr>
                <th>SI No</th>
                <th>Fast Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Number</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <!---- connect with datadase------>

            <?php
            include 'config.php';

            $sel= "SELECT * FROM user";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['number']; ?></td>
                

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

</body>

</html>
