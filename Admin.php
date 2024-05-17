<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body{
            margin-bottom: 100px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
        }
    </style>
</head>
<body>
    <header>Admin Page</header>

    <div class="Refernce">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="songs.html">Songs</a></li>
            <li><a href="aboutus.php">About Us</a></li>
        </ul>
    </div>

    <main>
        <h2>YOU ARE IN THE ADMIN PAGE</h2>

        <h2>!ONLY ADMINS CAN BE HERE!</h2>
    </main>
    <h1>Emails And Passwords</h1>
    <?php
echo "";
$con= mysqli_connect("localhost","root","","authen");

if(!$con)
echo "not connected";

else echo ("<table border='2' style='margin: auto;'> <tr> <th>Login</th> <th>Pass</th> <th>Cate</th><tr></tr>");
$r=mysqli_query($con, "select * from login");

if($r){

while($row=mysqli_fetch_array($r)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "</tr>";

}

}

echo "</table>";?>


<h1>Feedbacks</h1>
    
<?php
echo "<br>";
if(!$con)
echo "not connected";

else echo ("<table border='2' style='margin: auto;'> <tr> <th>Name</th> <th>Email</th><th>Feedback</th><tr></tr>");
$r=mysqli_query($con, "select * from feedback");

if($r){

while($row=mysqli_fetch_array($r)){
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "</tr>";

}

}

echo "</table>";


?></div>









    <footer>
        <div class="Footer">
            &copy;2024 LIU <br>Muhammad Abdallah<br> Hady Mshymesh
        </div>
    </footer>
    
</body>
</html>
