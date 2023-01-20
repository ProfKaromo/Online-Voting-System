<?php

session_start();
if(!isset($_SESSION['reg_no'])){
header("location:login.php");
}
?>
<html>
<head>
<link rel="shortcut icon" href="Images/logo.ico">
<link rel="stylesheet" href="style.css">
</head>
<body align = "center">
<h1>VOTE FOR GENERAL SECRETARY</h1>
<div id="all">
<?php
include('db_connect.php');
 
 $mysql = "SELECT * FROM apply_general_sec WHERE success='1'";
 $sql = mysql_query($mysql);
$dir ='uploads';
while($row = mysql_fetch_array($sql )){
?>
<div id="wrapper">
<div id="line" class="zoom_img">
<?php  $image = $row["image_caption"]; echo "<img src=' $dir/$image' class='zoom_img'>"; ?><br>
 
</div>
<?php $button=$row['fname']; echo " <button class='button'>$button</button>";?>
</div>

<?php
}
?>

</div>
<div id="next">
<button class="button"  onclick="location.href='member_index.php'">Home</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="location.href='vote_chairperson.php'">Back</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="button"  onclick="location.href='vote_finance.php'">Next Post</a></button><br><br>
<h3>Kirinyaga University, 2017 Elections.</h3>
</div>
<div id="bottom">
    |&nbsp;&nbsp;<a href="member_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
</div>
</body>
</html>