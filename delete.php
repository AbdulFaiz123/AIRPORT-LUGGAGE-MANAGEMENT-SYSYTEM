<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="luggage";
$tbl_name="passenger";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$select_db=mysqli_select_db($conn,$db_name)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($connection));
if(isset($_POST['Submit']))
    {
        $passno=$_POST['passno'];
        $sel="select * from passenger where passport_no='$passno'";
        $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
        $ret=mysqli_num_rows($cq);
        if($ret==false)
            {
        echo '<script language="javascript">';
		echo 'alert("Contractor not exist");';
		echo 'window.location.href="delete.php";';
		echo '</script>';    
            }
        else
            {
                $sel="delete from passenger where passport_no='$passno'";
                $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
                
        echo '<script language="javascript">';
		echo 'alert("Contractor Deleted");';
		echo 'window.location.href="user.php";';
		echo '</script>';   
    }
}
Mysqli_close($conn);
?>


<html>
    <head>
        <body style="background-color:#E5E5E5">
            <title>Delete</title>
    </head>
    <form action=""method="post">
        <table border="0" align="center">
        <tbody>
<tr>
<td><label for="id">Enter the passport no to be deleted:</label></td>
<td><input id="id" maxlength="50" name="passno" type="number" /></td>
</tr>
<tr>
<td align="right"><input name="Submit" type="Submit" value="Delete"/>&nbsp;<input type="reset" onClick="refresh()"></p></td>
</tr>
</tbody>
</table>
</form>
</html>	