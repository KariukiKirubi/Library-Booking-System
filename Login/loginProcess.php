<?php
    if(isset($_POST['submit'])){
        
        session_start();
        ob_start();
include_once ('connection/connection.php');
        $uname = htmlentities(stripslashes(mysql_real_escape_string($_POST['uname'])));
        $password = htmlentities(stripslashes(mysql_real_escape_string($_POST['password'])));
        
        $userqry = mysql_query("select * from user where email = '$uname' AND id = '$password'") or die(mysql_error());
        $rows = mysql_num_rows($userqry);
        if($rows==1)
        {
           
           $_SESSION['uname'] = $row['email'];
           $_SESSION['password'] = $row['id'];
          
           
           
               header('location:../book.php'); 
           }
           
 else {
            header('location:../ErrorMesage.php');
 }
 
 ob_end_flush();       
    }
?>
