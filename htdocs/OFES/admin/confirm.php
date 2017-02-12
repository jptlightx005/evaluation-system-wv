<?php
include('dbcon.php');
$get_id = $_GET['id'];

mysql_query("update students set status = 'active ' where student_id  = '$get_id' ")or die(mysql_error());
header('location:unstudents.php');
?>