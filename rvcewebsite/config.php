<?php

$servername="localhost";
$username="root";
$password="";
$db="user1";
$conn= mysqli_connect($servername,$username, $password, $db);

if(!$conn){
    die("failed to connect: ". mysqli_connect_error());
}else{

echo "Connection successfully";

}
?>
