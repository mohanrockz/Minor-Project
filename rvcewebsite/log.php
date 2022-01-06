<?php
$connect=mysqli_connect("localhost","root","","login") or die ("connection failed");
if(!empty($_POST['save']))
{
   $username=$_POST['email'];
   $pass=$_POST['pswd'];
   $error="";
   $success="";
  $query="select * from admin where username='$username' and password='$pass'";
  $result=mysqli_query($connect, $query);
  $count=mysqli_num_rows($result);
  if($count>0){
    echo "login successfully";
  }
  else{
    echo "login not successfully";
  }
}
?>

<form method="post"> 

Enter username <input type="text" name="email"/>
<br/>
Enter password<input type="text" name="pswd"/>
<br/>
<input type="submit" name="save" value="Login"/>
</form>