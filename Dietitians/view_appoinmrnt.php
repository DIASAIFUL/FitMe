<?php  include 'config.php';
 session_start(); 
 //error_reporting(0);
 ?>
<?php include 'd_navber.php';
if (isset($_GET['id']) && isset($_GET['status'])) {  
    $id=$_GET['id'];  
    $status=$_GET['status'];  
    mysqli_query($conn,"update appointment set status='$status' where id='$id'");  
    header("location:view_appoinmrnt.php");  
 
}  
?>



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
                <th>action</th>

            </tr>
        </thead>

        <tbody>

            <!---- connect with datadase------>

            <?php
           
            $drid=$_SESSION['user_id'];
            $sel= "SELECT * FROM appointment WHERE drid='$drid'";
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
                <td><?php echo $row['status']==1?"Approved":($row['status']==2?"Pending":"Rejected") ?></td>
                <!-- <td><?php echo $row['status']==1?"<a href='view_appoinmrnt.php?approve={$row['id']}'>Decline</a>":"<a href='view_appoinmrnt.php?decline={$row['id']}'>Approve</a>" ?></td> -->
                <td>  <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">  
                                <option value="">Update Status</option>  
                                <option value="2">Pending</option>  
                                <option value="1">Accept</option>  
                                <option value="0">Reject</option>  
                           </select>  </td>
                


            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
        </div>
    </main>
    <!--Main layout-->
<script>
      function status_update(value,id){  
           //alert(id);  
           let url = "view_appoinmrnt.php";  
           window.location.href= url+"?id="+id+"&status="+value;  
      }  
</script>
</body>

</html>
