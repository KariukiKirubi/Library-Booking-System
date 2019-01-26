<?php session_start();
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
 include('connection/connection.php'); 
 //include('userheader.php');
 
 

 
 
 
   $sqlbook= " SELECT title FROM books";
 $resbook= mysql_query($sqlbook) or die(mysql_error());
 while ($data=mysql_fetch_assoc($resbook)){
 extract($data);
 
 
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
				<h1>BOOK RENTAL AND MANAGEMENT SYSTEM</h1>
		</div>
<nav id="ddmenu">
    <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="registration.php">Register</a>
            </li>
        <li><a href="Aboutus.php">Information</a>        </li>
    </ul>
</nav>

    
		
  </div>

<div id="wa">
<h1><u><a href="approve.php">CHECK BOOKING STATUS CLICK HERE</u></a>			
</div>
<div>
<center>
<b>
<p style="font-family:verdana;font-size:200%;color:green">
Enter book type then submit<br>


<b/>
</center>
</p>

</div>
<div><div id="bookFrame">
<form name="Myform" id="Myform"  action="booking.php"  method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            
            
<tr>
     



</div>
		<td>Type of Book: </td>
<td><select name="book" id="dis" onkeydown="HideError()">
				                    <option value="economics" selected>Economics</option>
                     <option value="computing">Computing</option>
					 <option value="physics">Physics</option>
					 <option value="maths">MATHS</option>
					 <option value="literature">Literature</option>
					 <option value="law">Law</option>
					 <option value="engineering">Engineering</option>
					 <option value="medicine">Medicine</option>

					 </select>
					 </td>

			</tr>

			
			<div id="content">
    <form name="Myform" id="Myform" action="booking.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:green; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
		
		
		<tr>
                <td>Book</td>
                <td><select name="title">
				
				<?php while($data=mysql_fetch_assoc($resbook))
				{
				?>

				<option value="<?php echo $data['title'];?>"> <?php echo $data['title'];?>  


				</option>
				
				<?php
			}?>
				
				</select>
				
				</td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">email</td>
                <td style="font-size: 20px"><input type="text" name="email" id="email" required size="20px;"/></td>
            </tr>
		
            <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="submit BOOK request" /></td>
            </tr>
           
        
        </tbody>
    </table>
</form>

</div>
			
			
			
           
        
        </tbody>
    </table>

</div>
  </center>
  
  
</body>
</html>
<?php 
}
?>