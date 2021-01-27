<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css_style/site.css">
	<title> View page</title>
</head>
<body>
	<!--start header-->
        
        <header class="bg-one gap-h">
            <h2 class="co-one">El sadek</h2>
            <nav>
                <ul>
                    <li ><a class="co-two " href="home.php">Home</a></li>
                    <li ><a class="co-two " href="insert.php">Insert</a></li>
                    <li ><a class="co-two active" href="view.php">View</a></li>
                    <li ><a class="co-two" href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <br>
<!--end header-->

    <div id="view">
        <table border="2">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>color</th>
                <th>mail</th>
                <th>comment</th>
                <th>choice</th>
                <th>options</th>
            </tr>
            <?php


                $server_name = "localhost";
                $username    = "root";
                $password    = "";
                $db_name     = "cars";

                $connect = mysqli_connect($server_name, $username, $password, $db_name);

                $sql  = "SELECT * FROM car_data";
                $data = $connect->query($sql);
                $data->fetch_all();
                foreach($data as $row)
                    
                {
                    if ($row==""){}
                    
                    else
                    {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["color"]."</td><td>".$row["mail"]."</td><td>".$row["comment"]."</td><td>".$row["choice"]."</td><td><a href='delete.php?id=".$row["id"]."'><button>Delete</button></a><a href='update.php?id=".$row["id"]."'><button>Update</button></a></td></tr>";
                    }
                }
                

            ?>
        </table>

    </div>
</body>
</html>