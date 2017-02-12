    
<?php include_once('Configuration/setup.php'); 


#start session
#authenticating if the user is logged in
session_start();

if(!$_SESSION['teacherid']){

header('Location: index.php');

}
?>


<!DOCTYPE html> 
<html>
    <head>
        
    <title><?php echo $page_title.' | '.$site_title; ?></title>
        
    <?php include('Configuration/css.php'); ?>
        
    <?php include('Configuration/js.php'); ?>
        
    </head>
    
    <body>

        <?php include('Template/navigationhome.php');?> <!-- main navigation -->
           <!-- Start CONTENT -->  
        <div class="container">
            
                    <div class="jumbotron">
                       <div class="container">
                          <b><font size="3">First name:</b> <?php echo $teacher['fname']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</>
                            <b><font size="3">  Last name:</b> <?php echo $teacher['lname']; ?>
                           <b><font size="3">  Year and Section:</b> <?php echo $teacher['year'].'-'.$teacher['section']; ?>
                           <b><font size="3">  School: </b> <?php echo $teacher['school']; ?>
                          <b><font size="3">  Course: </b> <?php echo $teacher['course']; ?>

                       </div>
                    </div>
                
             
                <h2><b>Student Evaluation Page</b></h2><br>
                    
                <p>Below are the list of subjects you enrolled including their Course Number, Course Title, Course Description and the Instructor you are going to evaluate.</p>                                                                                   <p>Please evaluate your Instructor by clicking the <b>Evaluate Button.</b></p> 
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Course Number</th>
        <th>Course Title</th>
        <th>Course Description</th>
        <th>Instructor</th>
        <th>EVALUATE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        
      </tr>
    </tbody>
  </table>
  </div>
</div>
            </div>
                    
        </div>
         <!-- Footer -->
        <footer class="footer">
        
            <div class="container">
            
                <p class="text-muted">Sample Footer.</p>
                
            </div>
            
        </footer>
        
    </body>

    <script src="Configuration/transition.js"></script>
</html>