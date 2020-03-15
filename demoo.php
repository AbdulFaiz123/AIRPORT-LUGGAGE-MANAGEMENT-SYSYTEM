<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$_SESSION['uname'];
$uid=$_GET['uname'];

$sql="SELECT * FROM contractor WHERE uname='$uid'";
    $result=mysqli_query($conn,$sql4);
    while($row=mysqli_fetch_array($result)){
        echo"<table>
        <tr><td>NAME:</td><td class='i'>$row[0]</td></tr>
        <tr><td>EMAIL:</td><td class='i'>$row[1]</td></tr>
        <tr><td>MOB-NUMBER:</td><td class='i'>$row[2]</td></tr>";
        ob_end_flush();
    }
    ?>