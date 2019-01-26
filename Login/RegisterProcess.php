<?php
    if(isset($_POST['submit'])){
        $fname = htmlentities(stripslashes(mysql_real_escape_string($_POST['fname'])));
        $lname = htmlentities(stripslashes(mysql_real_escape_string($_POST['lname'])));
        $phone = htmlentities(stripslashes(mysql_real_escape_string($_POST['mobile'])));
        $email = htmlentities(stripslashes(mysql_real_escape_string($_POST['email'])));
	$admission = htmlentities(stripslashes(mysql_real_escape_string($_POST['admission'])));
	$gender = htmlentities(stripslashes(mysql_real_escape_string($_POST['gender'])));
		 
        
        include_once ('connection/connection.php');
        $insertqry = mysql_query("Insert into user (fname,lname,phone,email,admission,gender) values('$fname','$lname','$phone','$email','$admission','$gender')") or die(mysql_error());
        

if($insertqry)
        {
            header('location:Success.php');
        }

    }

?>
