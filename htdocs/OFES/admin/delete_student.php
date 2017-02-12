<?php
include('dbcon.php');
$id=$_GET['id'];
mysql_query("delete from students where id='$id'") or die(mysql_error());
header('location:students.php');
?>