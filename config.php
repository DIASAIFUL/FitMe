<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "database";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

function formatDate1($date){
    return date('Y-m-d',strtotime($date));
}

function formatDate2($date2){
    return date('g:i a',strtotime($date2));
}

function formatDate3($date3){
    return date('l',strtotime($date3));
}

?>