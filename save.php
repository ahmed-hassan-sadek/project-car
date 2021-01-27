<?php
session_start();
$fname=$_POST["Fname"];
$sname=$_POST["Sname"];
$name=$_POST["name"];
$password=$_POST["pass"];
include "db.php";

if ($fname=="" || $sname=="" || $name == "" || $password=="") {
  	header("location:signUp.php");	
  }
else{
  $sql="INSERT INTO input_data(`user_name`,`password`,`F_name`,`L_name`) VALUES
  ('".$name."','".$password."','".$fname."','".$sname."')";
  $connect->exec($sql);

  
  header("location:home.php");
}
?>