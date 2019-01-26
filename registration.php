<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>


 <SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
           {
		   (alert("Only numbers allowed."))
            return false;
} else{
         return true;
      }
	  }
      //-->



       
   </SCRIPT>



<?php session_start();
if(isset($_SESSION['login_user'])){
header("location: index.php");
}
 include('connection/connection.php'); 
//include('userheader.php');

 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>BOOK RENTAL AND MANAGEMENT SYSTEM</title>
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
        <li><a href="index.php">Home</a></li>
        
        <li><a href="registration.php">Register</a>
            </li>
        <li><a href="Aboutus.php">Information</a>        </li>
    </ul>
</nav>
<h1><a name="vision" id="vision"></a>Register here for you to access data</h1>
<?php include "RegisterProcess.php" ?>
     <form name="Myform" id="Myform"  action="RegisterProcess.php"  method="post">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>First name</td>
                <td><input type="text" name="fname" id="fname" maxlength="10" required/></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input type="text" name="lname" id="lname" maxlength="10"  required/></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="mobile" id="mobile" maxlength="10" placeholder="numbers only"  onkeypress="return isNumberKey(event)"required /></td>
            </tr>
            <tr>
                <td>Email address</td>
                <td><input type="text" name="email" id="email" maxlength="20"  required/></td>
            </tr>
<tr>
              
			<tr>
			<td>Reg No.:</td>
				<td><input type="text" name="admission" id="admission"  placeholder="numbers only" onkeypress="return isNumberKey(event)"  maxlength="5" required/></td>
			</tr><tr>	
				
				<tr>
				<td>Gender: </td>
				
				<td><select name="gender" id="gender" required/>
				                    <option value="Male" selected>Male</option>
                     <option value="Female">Female</option>
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
  <br>
  <br>
  
  <br>
  <?php
  include('footer1.php');
  ?>
 
</body>
</html>