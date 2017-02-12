
<?php

//setup file
#Database connect
include_once ('Configuration/connection.php');
$site_title = 'Faculty Evaluation System';
$page_title = 'Home page';

if(isset($_GET['page'])){

$pageid= $_GET['page']; #set $pageid to what value given to the url

}
else {

$pageid = 1; #set $pageid to 1 or to home


}

#for the contents(includes header, body)
$query = "select * from contents where id = $pageid";
$result = mysqli_query($dbc, $query);   
$page= mysqli_fetch_assoc($result);

#for the drop down in navigation
error_reporting(0); 
$q = "SELECT * FROM students WHERE studentsID='$_SESSION[studentsID]'";
$r = mysqli_query($dbc, $q);

$user = mysqli_fetch_assoc($r);

error_reporting(0); 
$t = "SELECT * FROM faculty WHERE teacherid='$_SESSION[teacherid]'";
$h = mysqli_query($dbc, $t);

$teacher = mysqli_fetch_assoc($h);
/**
#for declaring the user info in the home.php
error_reporting(0); 
$q = "SELECT * FROM students WHERE id='$_SESSION[id]' AND first='";
$r = mysqli_query($dbc, $q);

$user = mysqli_fetch_assoc($r);
**/
?>