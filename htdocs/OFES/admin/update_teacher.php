<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id_teacher'];
$teacherid=$_POST['teacherid'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$rank=$_POST['rank'];
$password=$_POST['password'];
$program=$_POST['program'];
$subject=$_POST['subject'];

mysql_query("update faculty set teacherid='$teacherid',fname='$fname',mname='$mname',lname='$lname',password='$password',academic_rank = '$rank', program = '$program' , subject = '$subject' where id_teacher='$id'")or die(mysql_error());
								
								
header('location:teachers.php');
}
?>	