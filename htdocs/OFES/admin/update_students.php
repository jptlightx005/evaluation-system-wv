<?php 
include('dbcon.php');
if (isset($_POST['submit'])){

$student_id=$_POST['student_id'];
$student_no=$_POST['student_no'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$course=$_POST['course'];

$school=$_POST['school'];
$password=$_POST['password'];
$year_level = $_POST['year_level'];
$section = $_POST['section'];
$status = $_POST['status'];

mysql_query("update students set studentsID='$student_no',firstname='$firstname',lastname='$lastname',school='$school',password='$password',year = '$year_level' ,section='$section',course = '$course' ,status = '$status' where id='$student_id'")or die(mysql_error());
								
								
header('location:students.php');
}
?>	