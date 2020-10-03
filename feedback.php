<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['message'];
$page=$_POST['page'];


$conn = new mysqli("localhost", "root","","auto_search");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO feedback values ('$name', '$phone', '$email','$msg')";
if ($conn->query($sql) === TRUE) {
 header('Location:feed.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
