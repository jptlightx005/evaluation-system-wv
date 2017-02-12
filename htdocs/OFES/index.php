<?php include('Configuration/setup.php'); 
session_start();?>

  
<!DOCTYPE html> 
<html>
    <head>
        
    <title><?php echo $page_title.' | '.$site_title; ?></title>
        
    <?php include('Configuration/css.php'); ?>
        
    <?php include('Configuration/js.php'); ?>
        
    </head>
    
    <body>

        <?php include('Template/navigation.php');?> <!-- main navigation -->
        
        <div class="container">
            <div class="span12">
				<div class="header">
				<div class="pull-left">
				
				</div>
				</div>
					<div class="alert alert-success"><Strong>Heads Up!</strong>&nbsp;Welcome to West Visayas State University - Pototan Campus
					
							<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				</div>
            <div class="jumbotron">
                
        <!-- Start CONTENT -->      
                
                <h2><?php echo $page['header']; ?></h2>
                <h4><?php echo $page['body'];?></h4>    
            </div>
                    
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