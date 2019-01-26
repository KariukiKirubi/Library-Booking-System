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
    <title>.:LIBRARY BOOKING MANAGEMENT SYSTEM:.</title>
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
				<h1>BOOK RENTAL MANAGEMENT; ADMIN</h1>
		</div>
<nav id="ddmenu">
    <ul>
        <li><a href="admindex.php">Home</a></li>
        
        <li><a href="#">BOOKINGS</a>
            <div>
                <div class="column">
                   
                    <a href="approvetenant.php">View Unapproved list and Approve</a> <br> 
                       
                       <a href="approvedlist.php">View approved list</a>
              </div>
                
        </li>
		<li><a href="addbook.php">Add Books</a></li>
        <li><a href="viewbook.php">view Books</a></li>
        <li><a href="index.php">logOut</a></li>
        
    </ul>
</nav>

    <div id="sliderFrame">
        
            
                <img src="images/fe.png" alt="" />
            
        </div>
        <!--thumbnails-->
    

        <!--clear above float:left elements. It is required if above #slider is styled as float:left. -->
        <div style="clear:both;height:0;"></div>
    </div>
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

</div>
<div id="bodyFrame">
<p>The library is situated within the school but you need to book a book at a convinient time
</p>
</div>
		
  </div>
  </center>
  
  
</body>
</html>