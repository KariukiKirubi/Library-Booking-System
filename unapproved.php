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
    <title>.:ERIKO Rentals:.</title>
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
				<h1>ERIKO Rentals(ADMINISTRATOR PART)</h1>
		</div>
<nav id="ddmenu">
    <ul>
        <li><a href="admindex.php">Home</a></li>
        
        <li><a href="#">BOOKINGS</a>
            <div>
                <div class="column">
                   
                    <a href="approve.php">Approve</a> <br> 
                       <a href="unapproved.php">View Unapproved list</a><br>
                       <a href="approved.php">View approved list</a>
              </div>
                
        </li>
        
    </ul>
</nav>

    <div id="sliderFrame">
        <div id="slider">
            <a href="http://www.stevenkayter.tk" target="_blank">
                <img src="images/image-slider-1.jpg" alt="" />
            </a>
            <a href="http://www.stevenkayter.tk" target="_blank">
                <img src="images/slider-1.jpg" alt="" />
            </a>
            <a href="http://www.stevenkayter.tk" target="_blank">
                <img src="images/caption2.gif" alt="" />
            </a>
            <a class="lazyImage" href="images/image-slider-2.jpg" title="this is the photo's caption.">this is the photo caption</a>
            <a href="http://www.stevenkayter.tk"><b data-src="images/image-slider-3.jpg">sample images</b></a>
            <a class="lazyImage" href="images/image-slider-4.jpg" title="">example of images</a>
        </div>
        <!--thumbnails-->
    <div id="thumbs">
            <div class="thumb">
                
                <div class="thumb-content"><p>Always the best</p>Welcome tenant</div>
                <div style="clear:both;"></div>
            </div>

            <div class="thumb">
                
                <div class="thumb-content"><p>All classes of people considered</p>we value u</div>
                <div style="clear:both;"></div>
            </div>

            

            <div class="thumb">
                
                <div class="thumb-content"><p>your home</p>Home away from home</div>
                <div style="clear:both;"></div>
            </div>
<div class="thumb">
                
                <div class="thumb-content"><p>Create account</p>To access information <b id="login"><a href="registration.php">CREATE ACCOUNT</a></b></div>
                <div style="clear:both;"></div>
            </div>
<div class="thumb">
                <h1>Log In</h1>
					
					<b id="welcome">Welcome : <i><</i></b
					<b id="login"><a href="logout.php">login here</a></b>
                     <b id="logout"><a href="logout.php">Log Out</a></b>
					<p>Like us on facebook <br><a href="http://www.facebook.com/"><img src="images/facebook.png"></a></p>
					
	
      </div>

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
<p>The rental is located near Kisii university along Kisii-Keroka road opposite Isana Nursing Home.
For you to book a room you must log into the system. after logging in you are able to choose a room that is convinient
 to you.
</p>
</div>
<div id="houses">
<h1><a>Below is a description of the diffent houses available</h1>
<h2><u>HIGH CLASS-->RENT PER MONTH SHS.70000</u></h2>
<p>This is a three bedroomed house with a kitchen, sitting room and a toilet. it is a self contained house that is well
 varnished plus wood facilities.
</p>
<h2><u>MEDIUM CLASS-->RENT PER MONTH SHS.50000</u></h2>
<p>This is a two bedroomed house with a kitchen, sitting room and a toilet.varnished plus wood facilities.
</p>
<h2><u>LOW CLASS-->RENT PER MONTH SHS.5000</u></h2>
<p>This is a single roomed house well varnished.
</p>
</div>
		
  </div>
  </center>
  
  
</body>
</html>