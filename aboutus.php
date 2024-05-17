    <?php

$con=mysqli_connect("localhost","root","","authen");

if (!$con) {
    die("Connection failed: " . $conn->connect_error);
}
if($con)
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    if ($con->query($sql) === TRUE) {
        echo "Thank you for your feedback! It has been successfully submitted.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
}

header("Location:aboutus.html");

?>

