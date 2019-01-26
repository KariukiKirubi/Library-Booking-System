<?php

$con=mysql_connect("localhost","root","");
 if(!$con){
 die("No Connection.". mysql_error());
 }

mysql_select_db("librarys",$con) ;
?>