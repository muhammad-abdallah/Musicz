<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $adminEmail="muhammad-abdallah@outlook.com";
    $adminpassword="Muhammadabdallah123";

    if($email==$adminEmail && $password==$adminpassword){
        header("Location: Admin.html");

    }
else{
    header("Location: Home.html");

}



}

?>
