<?php session_start();
if(isset($_SESSION['login_user'])){
header("location: index.php");
}

 include('connection/connection.php'); 
//include('header.php');
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:LIBRARY MANAGEMENT:.</title>
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
				<h1>LIBRARY MANAGEMENT</h1>
		</div>
<nav id="ddmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="registration.php">Register</a>
            </li>
        <li><a href="Aboutus.php">Information</a>        </li>
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
<p
</p>
</div>

		
  </div>
  </center>
  <!--bookinng a category was here-->
<html>
<head>
<style type="text/css">
#viewdata table{
    border:1px solid #aaa;
}
#viewdata th{background:#aaa;}
#viewdata td{background:#efefef;}
#viewdata th,td{padding:5px;text-align:left;}
</style>
<table id="viewdata">
<tr>
<th>Title</th>
<th>Category</th>

</tr>
</table>

<div id="mainbar">


<h1 style="text-align: left;"><span style="color:green">Book Here</span></h1>  


<div id="content">
    <form name="Myform" id="Myform" action="booking.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:green; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">email</td>
                <td style="font-size: 20px"><input type="text" name="email" id="email" required size="20px;"/></td>
            </tr>
			 <tr>
                <td>Book</td>
                <td><input type="text" name="book" id="book" required/></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="BOOK" /></td>
            </tr>
           
        
        </tbody>
    </table>
</form>

</div>
</div>
  
</body>
</html>