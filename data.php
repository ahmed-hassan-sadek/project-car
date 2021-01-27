<?php


session_start();
include "db.php";

$name=$_POST["name"];
$password=$_POST["pass"];

$_SESSION["name"]=$name;
$_SESSION["pass"]=$password;

$sql="SELECT user_name,password FROM input_data WHERE user_name='".$name."'";

$user=$connect->query($sql)->fetch();

if ($password=="") {
	header("location:sign_in.php");
}

elseif($user!="" && $user["password"]==$password){
    header("location:home.php");
}

else{
    header("location:signUp.php");
}

?>