<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from faculty where teacherid='$id'") or die(mysql_error());
header('location:teachers.php');
?>