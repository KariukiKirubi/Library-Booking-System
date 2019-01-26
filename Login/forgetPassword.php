
    <form name="Myform" id="Myform" action="forgetProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">Email</td>
                <td style="font-size: 20px"><input type="text" name="fname" id="fname" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Phone number</td>
                <td style="font-size: 20px"><input type="text" name="mobile" id="password" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">New Password</td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" maxlength="8" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Change Password" /></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td style="color:green;"><a href="login.php"><i><< Back</i></a></td>
            </tr>
        
        </tbody>
    </table>
</form>