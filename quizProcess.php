<?php
    if(isset($_POST['submit'])){
        $opinion = htmlentities(stripslashes(mysql_real_escape_string($_POST['opinion'])));
       
        include_once ('connection/connection.php');
$deleteqry = mysql_query("DELETE FROM opinion") or die(mysql_error());
        $insertqry = mysql_query("Insert into opinion (opinion) values('$opinion')") or die(mysql_error());
        if($insertqry)
        {
            header('location:Success.php');
        }
    }
?>
