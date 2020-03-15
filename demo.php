<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$user = $_SESSION['uname'];
$select_db=mysqli_select_db($conn,$db_name)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name where Username='$user'";
$result=mysqli_query($conn,$sql)or die(mysql_error($conn));
$count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <style>
.card
 {  ;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
  font-family: arial;
  justify-content: space-evenly;
  display:inline-block;
}

.title {
  color: grey;
  font-size: 18px;
}

</style>
</head>
<body>

<h2 style="text-align:center">WELCOME BACK <?php echo $user;?></h2>

<div class="card">
  <h1><?php echo $user; ?> </h1>
  <?php if($count>0)
   {
   while($row=mysqli_fetch_assoc($result))
   {
    ?>
    <p class="title"> Your ID: <?php echo $row['con_id'];?></p>
    <p class="title"> Username: <?php echo $row['Username'];?></p>
    <p class="title"> Project completed: <?php echo $row['projects'];?></p>
    <p class="title"> Phone no :<?php echo $row['pno'];?></p>
    <a href="contractor.html">LOGOUT</a>
</div>
</body>
</html>
<?php
    }
	}
	else
	{
	 echo "0 result";
    }
     mysqli_close($conn);
     ?>
     