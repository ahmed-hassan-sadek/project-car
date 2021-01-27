<?php 

    include "connect.php";


    $id      = $_POST["id"];
    $name    = $_POST["name"];
    $color   = $_POST["color"];
    $mail    = $_POST["mail"];
    $comment = $_POST["comment"];
    $type    = $_POST["cars_type"];

    $sql     = "UPDATE `car_data` SET `name`='".$name."',`color`='".$color."',`mail`='".$mail."',`comment`='".$comment."',`choice`='".$type."' WHERE id = '".$id."'";

    $connect->exec($sql);
    header("location:view.php");

?>