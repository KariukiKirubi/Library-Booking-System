<?php 
    
    if(isset($_POST['submit'])){
        
        $phone = htmlentities(stripslashes(mysql_real_escape_string($_POST['mobile'])));
        $email = htmlentities(stripslashes(mysql_real_escape_string($_POST['fname'])));
        $password = htmlentities(stripslashes(mysql_real_escape_string($_POST['password'])));
        
        
        include_once '../connection.php';
        $insertqry = mysql_query("Update user set password = '$password' where phone = '$phone' AND email = '$email'") or die(mysql_error());
        if($insertqry)
        {
            header('location:Success.php');
        }
    }
?>