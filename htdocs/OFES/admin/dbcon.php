<?php
mysql_select_db('ofesdbs',mysql_connect('localhost','root',''))or die(mysql_error());
error_reporting(0); 
session_start();
$q = "SELECT * FROM students WHERE studentsID='$_SESSION[studentsID]'";
$r = mysql_query($q);

$user = mysql_fetch_assoc($r);

?>