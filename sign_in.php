<html>
   <head>
      <link rel="stylesheet" href="css_style/sign_in.css">
    </head>
    <body>
      <form action="data.php" method="post">
        <span id="span1"><i>Cars</i></span>
        <span id="span2">Welcom Back</span>
        <div id="d1"><a href="#">Login With Facebook</a></div><br>
        <span id="span3"></span>
        <span id="span4">OR</span>
        <span id="span5"></span><br><br>
        <input id="in1" type="text" name="name" placeholder="   Email or User name "><br><br>
        <input id="in2" type="password" name="pass" placeholder="   Password"><br><br>
          <div id="d2">
            <input id="re" type="checkbox"> Remember me
            <a href="#">Forgot password?</a>
          </div><br>
        
        <button type="submit" name="submit">Log IN</button><br><br><br><br>
          <div id="d3">
            <span>Don't have an account? </span><a href="signUp.php" >Sign Up</a>
          </div>
        
      </form>
    </body>
</html>