<?php
session_start();
$link = new mysqli('localhost','root','','cyber_security');
if($link->connect_error)
{
    die("Error");
}
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql = "INSERT INTO userdetails VALUES('$email','$password')";
if($link->query($sql)===TRUE)
{
    echo "Added";
}
else
{
    echo "Already Registered Try logging in";
    header("location:index.html");
}
$sql="CREATE TABLE `".$email."` (
    questions VARCHAR(2000))";
if (mysqli_query($link, $sql)) 
{
  echo "Table $email created successfully";
} else 
{
  echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($link);
?>