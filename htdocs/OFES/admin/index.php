<?php include_once ('connection.php');



if ($_POST) {
$q="SELECT * FROM admin WHERE username = '$_POST[username]' AND password='$_POST[password]'";
$r= mysql_query($q);

     if(mysql_num_rows($r)==1)  { 
    
      
        header('Location: index.php');
    
	 }}
?>
<!DOCTYPE html> 
<html>
    <head>
        
    <title>Admin Login</title>
        
    <?php include('../Configuration/css.php'); ?>
        
    <?php include('../Configuration/js.php'); ?>
        
    </head>
    
    <body>

        <?php //include('Template/navigation.php');?> <!-- main navigation -->
        
        <div class="container">
            
            
                
        <!-- Start CONTENT -->      
            <div class="row">  
                
                <div class="col-md-6 col-md-offset-3">
                    
                    <div class="panel panel-info">
                         <div class="panel-heading"><h2><center>Log in</center></h2></div>
                        
                        <form action="dasboard.php" method="post" role="form">
                            <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" class="form-control" id="username" placeholder="Username"  name="username">
                            </div>

                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <!-- for later
                            <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                            </div>
                            -->
                            <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div><!-- end column -->
            </div>
                    
   
         <!-- Footer -->
        <footer class="footer">
        
            <div class="container">
            
                <p class="text-muted"></p>
                
            </div>
            
        </footer>
        
    </body>

    <script src="Configuration/transition.js"></script>
</html>