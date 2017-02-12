<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
 
 
 
$student_no=$_POST['student_no'];
$password=$_POST['password'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$course=$_POST['course'];
$year_level = $_POST['year_level'];
$section = $_POST['section'];
$status = $_POST['status'];



								
mysql_query("insert into students (studentsID,password,firstname,middlename,lastname,course,year,section,status)
 values('$student_no','$password','$firstname','$middlename','$lastname','$course','$year_level','$section','$status')")or die(mysql_error());
header('location:students.php');
}
?>	