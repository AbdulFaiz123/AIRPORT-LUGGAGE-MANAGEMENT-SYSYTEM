<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="administrator";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$id=$_POST['id'];
$user=$_POST['uname'];
$password=$_POST['psw'];
$fname=$_POST['fname'];
    $q="SELECT Username from administrator where Username='$user'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret>=1)
    {
        echo '<script language="javascript">';
		echo 'alert("User Already exists");';
		echo 'window.location.href="signup.html";';
		echo '</script>';    
    }
    else
    {
        $query="INSERT INTO administrator VALUES('$id','$fname','$user','$password')";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("You are sucessfull registrated");';
		echo 'window.location.href="admin.html";';
		echo '</script>';
        
    }

mysqli_close($conn);

?>

