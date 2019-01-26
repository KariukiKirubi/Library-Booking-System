<?php session_start();
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
if (!isset($_SESSION['count'])) {
$_SESSION['count'] = 0;
}

 include('connection/connection.php'); 
//include('header.php');
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:Library Management:.</title>
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
				<h1>Library Management</h1>
		</div>
<nav id="ddmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="registration.php">Register</a>
            </li>
        <li><a href="Aboutus.php">Information</a>        </li>
<li><a href="logoutadm.php">ADMINISTRATOR</a>        </li>
    </ul>
</nav>

    
<a name="top" id="top"></a>

<center>
		
		<div id="content">
		
				
				
				<p class="introduction">
				<div id="sidebar">
<ul id="nav" class="dropdown dropdown-vertical dropdown-vertical-rtl">
	
			

		</ul>
	</li>
	
			
				
				
					</div>



				<div id="mainbar">
<p>
LOCATION: KISII<br>
CONTACT : +854 675 4566

</p>
</div>
		
  </div>
  </center>
  
  
</body>
</html>