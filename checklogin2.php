<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
if(isset($_POST['uname']) && isset($_POST['psw']))
{
	$user=$_POST['uname'];
	$pass=$_POST['psw'];
	$a="SELECT * FROM contractor WHERE Username='$user' and password='$pass'";
	$result1=mysqli_query($conn,$a) or die(mysqli_error($conn));
	$cnt1=mysqli_num_rows($result1);
	if($cnt1 == true)
	{ 
		$_SESSION['uname']=$user;
		header('Location:demo.php');
		}
		else 
		{
			echo '<script language="javascript">';
			echo 'alert("Wrong Credentials Entered");';
			echo 'window.location.href="contractor.html";';
			echo '</script>';
		}
		}
		ob_end_flush(); 
		?> 