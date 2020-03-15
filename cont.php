<?php
$host="localhost";
$username="root";
$password="";
$db_name="mini";
$tbl_name="contractor";
$conn=new mysqli($host,$username,$password,$db_name)or die("cannot connect");
$user = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
<style>
.card {
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

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center"></h2>

<div class="card">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <p><button> <a href="demoo.php">Contact</button></a></p>
</div>
</body>
</html>
