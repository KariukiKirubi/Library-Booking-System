<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
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
    <title>BOOK RENTAL MANAGEMENT SYSTEM</title>
    <link href="ddmenu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
    <link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/2/js-image-slider.js" type="text/javascript"></script>
<link href="css/1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>

</head>
<body><div id="bodyFrame">
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
        </ul>
</nav>
<h1><a name="vision" id="vision"></a>Add books Here</h1>

     <form name="Myform" id="Myform"  action="addbook1.php"  method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>Book Title</td>
                <td><input type="text" name="title" id="book" value="book" onkeydown="HideError()" required/></td>
            </tr>
            	
				
				<tr>
				<td>Book Type </td>
				
				<td><select name="type" id="type"  value ="type" onkeydown="HideError()">
				                    <option value="economics" selected>Economics</option>
                     <option value="computing">COMPUTING</option>
					 <option value="physics">PHYSICS</option>
					 <option value="maths">MATHEMATICS</option>
					 <option value="literature">LITERATURE</option>
					 <option value="law">LLAW</option>
					 <option value="engineering">ENGINEERING</option>
					 <option value="medicine">MEDICINE</option>
					 
</td>
</select>
			</tr>
			
			
	
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Add" /></td>
            </tr>
        		   </tbody>
    </table>

  </div>
 
</body>
</html>