<?php
    
        
        $link=mysqli_connect("localhost","root","","librarys");
if($link===false){
die("ERROR".mysqli_connect_error());

}
$uname1 = htmlentities(stripslashes(mysql_real_escape_string($_POST['uname1'])));
$sql="update user set approval='APPROVED' where email like'$uname1'";
if(mysqli_query($link, $sql)){

            echo "SUCCESSFUL";
$loc = "http://localhost/LibraryBookingSystemflash/admindex.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
        

    }
else{
echo "error";
}

?>
