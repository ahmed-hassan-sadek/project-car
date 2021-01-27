<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css_style/add.css">
        <title> Add Dtat</title>
  <title></title>
</head>
<body>
    <form class="form" id="myform" action="add.php" method="POST">
            <label><span class="number">1</span> Car Info</label>
           <input type="text" id="name" placeholder="Your Name car*" name="name">
           <input type="text" id="color" placeholder="Your Car color *" name="color">
            <input type="mail" id="mail" placeholder="Your Email *" name="mail">
            <textarea id="comment" placeholder="comment about you see in our site" name="comment"></textarea>
            <label for="job">type of car:</label>
            <select id="type" name="type">
                <optgroup label="out_Egypt">
                  <option value="BMW">BMW</option>
                  <option value="Toyota">Toyota</option>
                  <option value="Lexus">Lexus</option>
                  <option value="Infiniti">Infiniti</option>
                  <option value="Landrover">Landrover</option>
                  <option value="Ford">Ford </option>
                  <option value="other_out_Egypt">other_out_Egypt</option>
                </optgroup>
                <optgroup label="in_Egypt">
                  <option value="football">automatic</option>
                  <option value="Citroen C. Elysee">Citroen C. Elysee</option>
                  <option value="Peugeot 301">Peugeot 301</option>
                  <option value="Fiat Tipo">Fiat Tipo</option>
                  <option value="Hyundai Verna">Hyundai Verna</option>
                  <option value="other_in_Egypt">other_in_Egypt</option>
                </optgroup>
            </select>
            <input type="submit" value="submit" class="button" name="submit">
            
        </form>
        <script src="js/validation.js"></script>
</body>
</html>