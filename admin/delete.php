<?php
include 'config.php';

    

    // sql to delete a record
    $id=$_GET['id'];

    $sql = "DELETE FROM user WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
       header("Location: view_user_data.php");
    } else {
        echo "Error deleting record";
    }

        // sql to delete a record
        $id=$_GET['id'];
    
        $sql = "DELETE FROM blog WHERE id='$id'";
    
        if ($conn->query($sql) === TRUE) {
           header("Location: admin_blog.php");
        } else {
            echo "Error deleting record";
        }

        // sql to delete a record
        $id=$_GET['id'];
    
        $sql = "DELETE FROM workshop WHERE id='$id'";
    
        if ($conn->query($sql) === TRUE) {
           header("Location: view_workshop.php");
        } else {
            echo "Error deleting record";
        }


        // sql to delete a record
        $id=$_GET['id'];
    
        $sql = "DELETE FROM  trainer WHERE id='$id'";
    
        if ($conn->query($sql) === TRUE) {
           header("Location:view_trainers.php");
        } else {
            echo "Error deleting record";
        }

        // sql to delete a record
        $id=$_GET['id'];
    
        $sql = "DELETE FROM  booked WHERE id='$id'";
    
        if ($conn->query($sql) === TRUE) {
           header("Location:view-booking.php");
        } else {
            echo "Error deleting record";
        }



         // sql to delete a record
         $id=$_GET['id'];
    
         $sql = "DELETE FROM   appointment WHERE id='$id'";
     
         if ($conn->query($sql) === TRUE) {
            header("Location:view_appoinmrnt.php");
         } else {
             echo "Error deleting record";
         }

         
         // sql to delete a record
         $id=$_GET['id'];
    
         $sql = "DELETE FROM   dietitian WHERE id='$id'";
     
         if ($conn->query($sql) === TRUE) {
            header("Location:a_dietitian.php");
         } else {
             echo "Error deleting record";
         }


          // sql to delete a record
         $id=$_GET['id'];
    
         $sql = "DELETE FROM `reg-workshop` WHERE id='$id'";
     
         if ($conn->query($sql) === TRUE) {
            header("Location:view_workshop-reg.php");
         } else {
             echo "Error deleting record";
         }


?>

    