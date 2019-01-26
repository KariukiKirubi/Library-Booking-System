<?php
    if(isset($_POST['submit'])){
        
        session_start();
        ob_start();
        include ('connection/connection.php');
        
        
        $uname = htmlentities(stripslashes(mysql_real_escape_string($_POST['uname'])));
        $password = htmlentities(stripslashes(mysql_real_escape_string($_POST['password'])));
        
        $userqry = mysql_query("select * from user where email = '$uname' AND password = '$password'") or die(mysql_error());
        $countUser = mysql_num_rows($userqry);
        if($countUser == 1)
        {
           $row = mysql_fetch_array($userqry);
           $_SESSION['email'] = $row['email'];
           $_SESSION['password'] = $row['password'];
           $_SESSION['type'] = $row['type'];
           
           if($_SESSION['type'] == 'Admin'){
               header('location:../index.php'); 
           }
           elseif ($_SESSION['type'] == 'Normal') {
              header('location:./Normal/index.php');
       }
        }
 else {
            header('location:../ErrorMesage.php');
 }
 
 ob_end_flush();       
    }
?>
