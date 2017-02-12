
<?php include_once('Configuration/setup.php'); 

session_start();
$_SESSION['studentsID']=$studentid;   
if ($_POST){

$q="SELECT * FROM students WHERE studentsID = '$_POST[studentid]' AND password='$_POST[password]'";
$r= mysqli_query($dbc, $q);
$id= $_POST['studentid'];
$pass= $_POST['password'];
   
    if(mysqli_num_rows($r)==1){
    session_start();
    $_SESSION['studentsID']=$_POST['studentid'];
        header('Location: home_student.php');
    
    } if(empty($id)||empty($pass)) { 
        
    ?><?php ob_start();?> 
   <div><font color='red'><center>Please fill out the forms.</center></font></div>  
    <?php $error=ob_get_clean(); ?>   <?php
    }
    
    else {
    ?><?php ob_start();?> 
   <div><font color='red'><center>Invalid username or password.<br>Please Contact your Department Head.</center></font></div>  
    <?php $error=ob_get_clean(); ?>   <?php
    }

}
?>


<!DOCTYPE html> 
<html>
    <head>
        
    <title>Login</title>
        
    <?php include('Configuration/css.php'); ?>
        
    <?php include('Configuration/js.php'); ?>
        
    </head>
    
    <body>

        <?php //include('Template/navigation.php');?> <!-- main navigation -->
        
        <div class="container">
            
            
                
        <!-- Start CONTENT -->      
            <div class="row">  
                
                <div class="col-md-6 col-md-offset-3">
                    
                    <div class="panel panel-info">
                         <div class="panel-heading"><h2><center>Log in</center></h2></div>
                     
                        <form action="student_login.php" method="post" role="form">
                            <div class="form-group">
                            <label for="studentid">Student ID</label>
                            <input type="studentid" class="form-control" id="studentid" placeholder="Student ID"  name="studentid">
                            </div>

                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="index.php" button type="submit" class="btn btn-default">Back</button></a>
                            </form>
                        </div>
                    </div><!-- end column -->
            </div>
                    
   
         <!-- Footer -->
        
        
            <div class="container">
            
                <p class="text-muted"><?php echo $error ?></p>
                
            </div>
            
 
        
    </body>

    <script src="Configuration/transition.js"></script>
</html>