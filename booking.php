<?php

       
include_once ('connection/connection.php');
$con=mysql_connect("localhost","root","");
 if(!$con){
 die("No Connection.". mysql_error());
 }
 
 
$email = htmlentities(stripslashes(mysql_real_escape_string($_POST['email'])));
$book = htmlentities(stripslashes(mysql_real_escape_string($_POST['book'])));
  


  
  
$sql="SELECT * FROM user WHERE email = '$email'";
$res=mysql_query($sql) or die(mysql_error());
IF($res>0)
{
$sql1= "update user set book='$book' WHERE email = '$email' ";


$res1=mysql_query($sql1)or die(mysql_error());

header("location: success.php");
}
else
{
echo ("email not found");
}
?>