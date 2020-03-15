<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$id=$_POST['id'];
$user=$_POST['uname'];
$pass=$_POST['psw'];
$proc=$_POST['Proc'];
$pno=$_POST['pno'];
    $q="SELECT Username from contractor where Username='$user'";
    $cq=mysqli_query($conn,$q) or die(mysqli_error($conn));
    $ret=mysqli_num_rows($cq);
    if($ret>=1)
    {
        echo '<script language="javascript">';
		echo 'alert("User Already exists");';
		echo 'window.location.href="consign.html";';
		echo '</script>';    
    }
    else
    {
        $query="INSERT INTO contractor VALUES('$id','$user','$pass',$proc,$pno)";
        mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo '<script language="javascript">';
		echo 'alert("You are sucessfull registrated");';
		echo 'window.location.href="contractor.html";';
		echo '</script>';
        
    }

mysqli_close($conn);

?>

