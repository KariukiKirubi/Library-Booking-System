<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;"><span style="color:green">Login</span></h1>  
</div>
</div>

<div id="content">
    <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:green; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">Username</td>
                <td style="font-size: 20px"><input type="text" name="uname" id="fname" required size="20px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Password</td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" required size="20px;"/></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;"></td>
                <td><input type="submit" name="submit" value="Login" /></td>
            </tr>
           
        
        </tbody>
    </table>
</form>

</div>

<div class= "clear"></div>

<div id="footer">

</div>
</div>
</body>
</html>
