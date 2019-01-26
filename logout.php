<?php
    @session_start();
       
    header('location:Login/login.php');


    @session_destroy();
    header('location:Login/login.php');

?>
