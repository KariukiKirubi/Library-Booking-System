<?php

 $type = htmlentities(stripslashes(mysql_real_escape_string($_POST['type'])));
$title = htmlentities(stripslashes(mysql_real_escape_string($_POST['title']))); 
 
 
 $sql=" SELECT * FROM books";
 $res=mysql_query($sql) or die(mysql_error());
while($row=mysql_fetch_assoc($res))
{
echo "<tr><td>";
echo $res['title'];
echo "</td></tr>";


?>