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



<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="campain"; // Database name 
$tbl_name="contestants"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar 

$sql="SELECT name FROM $tbl_name where post like 'CHAIRPERSON' ";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

$sql2="SELECT name FROM $tbl_name where post like 'SECRETARY' ";
$result2=mysql_query($sql2);
$rows2=mysql_fetch_array($result2);

?>

				<div id="mainbar">
<h1><a name="vision" id="vision"></a>Rate a contestant of your choice</h1>
Chairperson : 
<form name="Myform2" id="Myform"  action="RegisterProcess.php"  method="post" onsubmit="return(Validate());">
<select name="contestants">

<option value="volvo" id= "chair" name="chair"><?php echo $rows['name'];?>
</select>
<input type="submit" name="submit" value="RATE" />
</form><br><br>
Secretary : 
<form name="Myform" id="Myform"  action="RegisterProcess.php"  method="post" onsubmit="return(Validate());">
<select name="contestants2"> 

<option value="volvo2" id="sec" name="sec"><?php echo $rows2['name'];?> 
</select>
<input type="submit" name="submit" value="RATE" />
</form>
						
</div>
		
  </div>
  </center>
  
  <?php include('footer.php') ?>
</body>
</html>