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
        <li><a href="admindex.php">Home</a></li>
        
        <li><a href="#">BOOKINGS</a>
            <div>
                <div class="column">
                   
                    <a href="approvetenant.php">View Unapproved list and Approve</a> <br>
                       
                       <a href="approvedlist.php">View approved list</a>
              </div>
                
        </li>
        
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
  <?php
include_once ('connection/connection.php');
$sql="SELECT * FROM user WHERE approval = 'APPROVED' ORDER BY borrowing_date";
$res=mysql_query($sql) or die(mysql_error());
?>
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
<th>Fname</th>
<th>Lname</th>
<th>Phone</th>
<th>email</th>
<th>Reg No</th>
<th>gender</th>
<th>book</th>
<th>Borrowing date</th>
<th>Book Approved</th>
<th>Returning date</th>
<?php
while($row=mysql_fetch_assoc($res))
{
echo "<tr><td>";
echo $row['fname'];
echo "</td><td>";
echo $row['lname'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['id'];
echo "</td><td>";
echo $row['gender'];
echo "</td><td>";
echo $row['book'];
echo "</td><td>";
echo $row['borrowing_date'];
echo "</td><td>";
echo $row['approval'];
echo "</td><td>";
echo $row['returning_date'];
echo "</td><td></tr>";



}
mysql_close();
?>
</table>

<div id="mainbar">





</div>
</div>
  
</body>
</html>