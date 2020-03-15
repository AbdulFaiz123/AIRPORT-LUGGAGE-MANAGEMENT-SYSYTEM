<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="trigger_time";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$select_db=mysqli_select_db($conn,$db_name)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysql_error($conn));
$count=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGS</title>
</head>
<body>
  <?php if($count>0)
   {
   while($row=mysqli_fetch_assoc($result))
   {
    ?>
    <p class="title"> New user sign up time: <?php echo $row['timestamp'];?></p>
    <p class="title"> customer id: : <?php echo $row['cid'];?></p>
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
     