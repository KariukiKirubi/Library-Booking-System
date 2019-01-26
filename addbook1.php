<?php
			
			
			 mysql_select_db("librarys", mysql_connect("localhost", "root", "")) or die(mysql_error());
            $title= $_POST ['title'];
			$type= $_POST ['type'];

$query = "INSERT INTO books VALUES('$title', '$type') ";

	$result = mysql_query($query)or die(mysql_error());
	header ("location: admindex.php");
	
?>
     