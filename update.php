<?php
	include "connect.php";
	$id=$_GET["id"];
	$sql = "SELECT * FROM car_data WHERE id = '".$id."'";
	$data = $connect->query($sql)->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css_style/add.css">
        <title> update page</title>
	<title>page for insert data</title>
</head>
<body>
        <br>
        <form class="form" id="myform" action="update_ok.php" method="POST">
            <label><span class="number">1</span> Car Info</label>
            <input type="text" id="name" placeholder="Your Name car*" name="name" value="<?php echo $data["name"]; ?>">
            <input type="text" id="color" placeholder="Your Car color *" name="color" value="<?php echo $data["color"]; ?>">
            <input type="mail" id="mail" placeholder="Your Email *" name="mail" value="<?php echo $data["mail"]; ?>">
            <input type = "text" id="comment" placeholder="comment about you see in our site" name="comment" value="<?php echo $data["comment"]; ?>">
            <label for="job" >type of car:</label>
            <input type="text" name="cars_type" placeholder="your type of car " name="cars" value="<?php echo $data["choice"]; ?>">
            <input type="hidden" name="id" value="<?php echo $id ;?>">
            <input type="submit" value="submit" class="button" name="submit">
            
        </form>
        <script src="js/validation.js"></script>


<!--end header-->
</body>
</html>