<?php include('admin/dbcon.php'); ?>


<?php 
			if (isset($_POST['submit'])) {
				
			
$faculty_id=$_POST['faculty_id'];
$studentid= $user['studentsID']; 
$faculty_name=$_POST['faculty_name'];
$student_name=$_POST['student_name'];



$commitment1=$_POST['1'];
$commitment2=$_POST['2'];
$commitment3=$_POST['3'];
$commitment4=$_POST['4'];
$commitment5=$_POST['5'];

$knowledge1=$_POST['6'];
$knowledge2=$_POST['7'];
$knowledge3=$_POST['8'];
$knowledge4=$_POST['9'];
$knowledge5=$_POST['10'];

$teaching1=$_POST['11'];
$teaching2=$_POST['12'];
$teaching3=$_POST['13'];
$teaching4=$_POST['14'];
$teaching5=$_POST['15'];

$management1=$_POST['16'];
$management2=$_POST['17'];
$management3=$_POST['18'];
$management4=$_POST['19'];
$management5=$_POST['20'];
								
mysql_query("insert into evaluation_result (student_id,student_name,faculty_id,faculty_name,commitment1,commitment2,commitment3,commitment4,commitment5,knowledge1,knowledge2,knowledge3,knowledge4,knowledge5,
teaching1,teaching2,teaching3,teaching4,teaching5,management1,management2,management3,management4,management5)
 values('$studentid','$student_name','$faculty_id','$faculty_name','$commitment1','$commitment2','$commitment3','$commitment4','$commitment5','$knowledge1','$knowledge2','$knowledge3','$knowledge4','$knowledge5','$teaching1','$teaching2','$teaching3','$teaching4','$teaching5','$management1','$management2','$management3','$management4','$management5')")or die(mysql_error());
header('location:home_student.php');
}
			?>