<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
    
$teacherid=$_POST['teacherid'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$program=$_POST['program'];
$rank=$_POST['rank'];
$subject=$_POST['subject'];

								
mysql_query("insert into faculty (teacherid,password,fname,mname,lname,program,academic_rank,subject)
 values('$teacherid','$password','$fname','$mname','$lname','$program','$rank','$subject')")or die(mysql_error());
header('location:teachers.php');
}
?>	