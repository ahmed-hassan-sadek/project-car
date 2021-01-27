<?php

	$server_name = "localhost";
	$username    = "root";
	$password    = "";
	$db_name     = "cars";

	$name    = $_POST["name"];
	$color   = $_POST['color'];
	$mail    = $_POST['mail'];
	$comment = $_POST["comment"];
	$type  	 = $_POST["type"];
	
	if ($name=="" || $color=="" || $mail=="" || $comment=="" || $type=="") {
		header("location:insert.php");
	}
	else {
	$conect = mysqli_connect($server_name,$username,$password,$db_name);
	$sql    =  "INSERT INTO `Car_Data`(`name`, `color`, `mail`, `comment`, `choice`) VALUES  ('$name','$color','$mail','$comment','$type')";
	$request = mysqli_query($conect, $sql);
	if ($request) {
		header("location:home.php");
	}
	else
	{
		echo "not connected"."<br>";
		mysqli_close($conect);
	}

}

?>
