<!DOCTYPE html>
<html>
<head>
    <title>manu</title>
</head>
<body>
    <div id="wrapper">
            
            <a onclick="closeForm()"><img src="images/x.png" id="close" style="margin-left:90% ;margin-top:0px;height:20px;width:20px"></a><br>
            <h2>Contact Us</h2>
  <div id="error_message"></div>

  <form id="myform" onsubmit="return validate();" method="POST" action="feedback.php" >
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>
    
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone" name="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message" name="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit" name="submit">
    </div>
    <input type="hidden" id="custId" name="page" value="news">
  </form>
      
</div>
</body>
</html>






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
 header('Location:'.$page.'.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
