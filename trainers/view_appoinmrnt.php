<?php include 'd_navber.php';?>



    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
        <table class="table align-middle mb-0 bg-white">
            <h1>User Data</h1>
        <thead class="bg-light">
            <tr>
                <th>SI No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Dietitian Name</th>
                <th>Message</th>
                <th>Apply Date</th>
                <th>status</th>

            </tr>
        </thead>

        <tbody>

            <!---- connect with datadase------>

            <?php
            include 'config.php';

            $sel= "SELECT * FROM appointment";
            $query=$conn-> query($sel);

            while($row=$query->fetch_assoc()){

            ?>

            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['DietitianName']; ?></td>
                <td><?php echo $row['Message']; ?></td>
                <td><?php echo $row['appointment_time']; ?></td>
                <td><?php echo $row['status']; ?></td>
                


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
