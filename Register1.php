<?php
$email=$_POST['email'];
$password=$_POST['password'];
$con= mysqli_connect("localhost","root","","authen");

$sql = "INSERT INTO login (email, password, category) VALUES ('$email', '$password', 'N')";
if ($con->query($sql) === TRUE) 
        header("Location:index.html");
else   echo "<scrpit>alert('You Register is Invalid')</scrpit>";

$con->close();













?>