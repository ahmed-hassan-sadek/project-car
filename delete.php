<?php
    
    $server_name = "localhost";
    $username    = "root";
    $password    = "";
    $db_name     = "cars";


// Create connection

 $connect= new mysqli($server_name,$username,$password,$db_name);

$id=$_GET['id'];

$sql = "DELETE FROM `car_data` WHERE id='".$id."'";

$connect->query($sql);

header("location:view.php");

?>
