<?php
session_start();
?>

<html>
   <head>
    <link rel="stylesheet" href="css_style/sign_up.css">
    </head>
    <body>
        <div>
      <form action="save.php" method="post">
      <h2>sign up </h2>
        <input id="in1" type="text" name="Fname" placeholder="First Name *"><br><br>
        <input type="text" name="Sname" placeholder="Second Name *"><br><br>
        <input type="text" name="name" placeholder="user name *"><br><br>
        <input type="password" name="pass" placeholder="Password *"><br><br>
        <button type="submit" name="submit">Sign Up</button>


      </form>
      </div>
    </body>
</html>