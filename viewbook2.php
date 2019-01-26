<?php
mysql_select_db("librarys", mysql_connect("localhost", "root", "")) or die(mysql_error());
$mesg = "";


$query = "SELECT  * FROM books" ;
	$result = mysql_query($query)or die(mysql_error());
?>
	
	
<?php include "header.php"?>
	
	<?php
	
	
echo '<table width="60%" align="center" style="border-right:1px solid #ccc; border-bottom:1px solid #ccc; border="2" cellpadding="5" cellspacing="5" bgcolor="#CCCCCC"">';
	echo '<form method="post" action="">';
   echo '<tr><th class="class-th">books</th>'; 
	echo '<th class="class-th">type</th>';
	
	    
    
    while($row = mysql_fetch_array($result)){
		
		
		echo '<tr><td align="center" class="class-td">' . $row['title'] . '</td>';
		echo '<td align="center" class="class-td">' . $row['type'] . '</td></tr>';
		
	}	
	?>

