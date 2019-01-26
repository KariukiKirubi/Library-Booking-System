<?php
    if(isset($_POST['submit'])){
        
        session_start();
        ob_start();
include_once ('connection/connection.php');
 include('userheader.php');

        $uname = htmlentities(stripslashes(mysql_real_escape_string($_POST['uname'])));
		
        
        
        $sql="SELECT * FROM user where email like '$uname'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

        
           echo $rows['approval'];
$loc = "http://localhost/libraryBookingSystemflash/index.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 10000);
					
					</script>';
						
           
 
 ob_end_flush();       
    }
?>
