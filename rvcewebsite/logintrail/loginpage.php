<?php 
$hostname = "localhost"; 
$username = "root"; 
$password = " "; 
$database = "login"; 

$conn= mysqli_connect($hostname,$username,$password,$database); 
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
} else {
 die( "database not connected"); 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>login</title>
</head>
<body>
<h1>LOGIN FORM</h1>
  <div style="background-color: grey; width: 500px;">
  <br><br>

  <form action="#" method="POST">
  <div>
    <label>username</label>
    <input type="text" name="username" required>
</div>
<div>
    <label>password</label>
    <input type="password" name="password" required>
</div>
<div>
  <input type="submit" value="Login">
</div>
</div>
</form>
  
</body>
</html>
