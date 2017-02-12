
<?php include_once('Configuration/setup.php'); 

session_start();
$_SESSION['teacherid']=$teacherid;   
if ($_POST){

$q="SELECT * FROM faculty WHERE teacherid = '$_POST[teacherid]' AND password='$_POST[password]'";
$r= mysqli_query($dbc, $q);
$id= $_POST['teacherid'];
$pass= $_POST['password'];
   
    if(mysqli_num_rows($r)==1){
    session_start();
    $_SESSION['teacherid']=$_POST['teacherid'];
        header('Location: home_teacher.php');
    
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
                     
                        <form action="teacher_login.php" method="post" role="form">
                            <div class="form-group">
                            <label for="teacherid">Teacher's ID</label>
                            <input type="teacherid" class="form-control" id="teacherid" placeholder="Teacher's ID"  name="teacherid">
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