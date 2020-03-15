<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$select_db=mysqli_select_db($conn,$db_name) or die (mysqli_error($conn));
$ab=$_POST['uname'];
if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $user=$_POST['uname'];
        $pass=$_POST['psw'];
        $proc=$_POST['Proc'];
        $pno=$_POST['pno'];
        $res2="UPDATE $tbl_name set con_id='$id',Username='$user',Password='$pass',projects='$proc',pno='$pno' where Username='$user'";
        $result=mysqli_query($conn,$res2) or die (mysqli_error($conn));
        header('location:disp.php');
    }
?>

<?php
$ab1=$_POST['uname'];
$res1="select * from $tbl_name where Username='$ab1'";
$result1=mysqli_query($conn,$res1) or die (mysqli_error($conn));
$cn=mysqli_num_rows($result1);
if($cn==false)
    {
        header("Location:dsn.php");
    }
else
    {
        while($row=mysqli_fetch_array($result1))
        {
            $id=$row['con_id'];
            $user=$row['Username'];
            $pass=$row['Password'];
            $proc=$row['projects'];
            $pno=$row['pno'];
        }
    }   
?>

<html>
    <head>
        <title>Edit data</title>
    </head>
    <body>
        <br/><br/>
        <form name="form1" method="post" action="handle.php">
            <table border="0">
                <tr>
                    <td>Con ID</td>
                    <td><input type="uniqid" name="id" value="<?php echo $id;?>" ></td>
                </tr>
                <tr>
                    <td>Contractor name</td>
                    <td><input type ="text" name="uname" value="<?php echo $user;?>" ></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type ="text" name="psw" value="<?php echo $pass;?>" ></td>
                </tr>
                <tr>
                    <td>Project Completed</td>
                    <td><input type ="text" name="Proc" value="<?php echo $proc;?>" ></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><input type ="text" name="pno" value="<?php echo $pno;?>" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>