<?php
$con = mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("vote",$con)or die('Sorry, Connection to the database failed.'.mysql_error());
?>