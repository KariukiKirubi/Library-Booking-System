<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<?php session_start();
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
if (!isset($_SESSION['count'])) {
$_SESSION['count'] = 0;
}
echo 'You have visited this page ' . $_SESSION['count'] . ' time(s).';
$_SESSION['count']++;
 include('connection/connection.php'); 
//include('header.php');
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:Email Campaign:.</title>
    <link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
    <link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
<link href="css/1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>

</head>
<body><div id="bodyFrame">
		<div id="header">
				<h1>Email Campaign</h1>
		</div>
<nav id="ddmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="#">User Portal</a>
            <div>
                <div class="column">
                   
                    <a href="registration.php">Subscription</a> <br> 
                       <a href="quiz.php">Opinion</a>
              </div>
                
        </li>
		
             
         <li><a href="forum.php">Reports</a>        </li>


      

        <li><a href="news.php">News</a>        </li>

        <li><a href="Aboutus.php">About Us</a>        </li>
    </ul>
</nav>


     <form name="Myform2" id="Myform2" action="quizProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        
            
               <p> First name</p><br>
<TEXTAREA name="opinion" id="opinion" COLS=40 Rows=6></TEXTAREA><br><br>
                
               <input type="submit" name="submit" value="Add" />
    </form>

  
  <?php include('footer.php') ?>
</body>
</html>