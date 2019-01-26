<?php
    
        
        $link=mysqli_connect("localhost","root","","librarys");
if($link===false){
die("ERROR".mysqli_connect_error());

}
$email = htmlentities(stripslashes(mysql_real_escape_string($_POST['email'])));
  $title = htmlentities(stripslashes(mysql_real_escape_string($_POST['title'])));
$sql="update user set house='$title', approval='WAITING_APPROVE' where email like'$email'";
if(mysqli_query($link, $sql)){

            echo "SUCCESIFUL CHECK AFTER A DAYS FOR THE APPROVAL";
$loc = "http://localhost/libraryBookingSystemflash/index.php";
					
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
