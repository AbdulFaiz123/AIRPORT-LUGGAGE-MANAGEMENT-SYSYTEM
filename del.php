<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
if(isset($_POST['Submit']))
    {
        $user=$_POST['uname'];
        $sel="select * from contractor where username='$user'";
        $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
        $ret=mysqli_num_rows($cq);
        if($ret==false)
            {
                echo "<center><h2 style='color:red'>UserDoes not exist</h2></center>";
            }
        else
            {
                $sel="delete from contractor where username='$user'";
                $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
                echo"<center><h2 style='color:red'>Contractor details deleted</h2></center>";
            }
    }
Mysqli_close($conn);
?>


<html>
    <head>
        <body > 
            <title>Registration Form</title>
            
    </head>
    <form action=""method="post">
        <table border="0" align="center">
        <tbody>
    
<tr>
<td><label for="id">Enter user to be deleted:</label></td>
<td><input id="id" maxlength="50" name="uname" type="text" /></td>
</tr>
<tr>
<td align="right"><input name="Submit" type="Submit" value="Delete"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</div>
</table>
</form>
</html>	