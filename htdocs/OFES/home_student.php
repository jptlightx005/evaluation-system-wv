    
<?php include_once('Configuration/setup.php'); 


#start session
#authenticating if the user is logged in
session_start();

if(!$_SESSION['studentsID']){

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
                          <b><font size="3">Name:</b> <?php echo $user['firstname']; ?> <?php echo $user['middlename']; ?> <?php echo $user['lastname']; ?>&nbsp;&nbsp;&nbsp;</>
                           <b><font size="3"> Year and Section:</b> <?php echo $user['year'].'-'.$user['section']; ?>&nbsp;&nbsp;&nbsp;
						   <b><font size="3">School: </b> <?php echo $user['school']; ?> &nbsp;&nbsp;&nbsp;
                          <b><font size="3">Course: </b> <?php echo $user['course']; ?>&nbsp;&nbsp;&nbsp;

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
    
        <th>Instructor</th>
        <th>EVALUATE</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	

		$subjects = explode("|---|", $user['subject']);
		
		$query = "SELECT * FROM subject WHERE ";
		$subquery = "";	
	$temp = "";
	$subject_count = count($subjects);

		for($i = 0; $i < $subject_count; $i++){

			$temp = $subjects[$i];
			$r = rand(0, $subject_count - 1);
			$subjects[$i] = $subjects[$r];
			$subjects[$r] = temp;

		}
			for($i = 0; $i < 5; $i++){
			$subject = $subjects[$i];
			$subquery .= "code = '$subject' OR ";
		}

		$query .= $subquery;
		
		$query = substr($query, 0, strlen($query) - 4);

		mysql_select_db('ofesdbs',mysql_connect('localhost','root',''))or die(mysql_error());
		$result =mysql_query($query) or die(mysql_error());
		
		while($row=mysql_fetch_array($result)){
			?>
			  <tr>
			  <!-- marka bao -->
				<td><?php echo $row['code']; ?></td>
				<td><?php echo $row['title']; ?></td>
				
				<?php 
					$subject_select = $row['teacherid'];
					$teacher_query= mysql_query("select * from faculty where teacherid='$subject_select'");
					$teacher_row=mysql_fetch_array($teacher_query);?>
				<td><?php echo $teacher_row['fname'];?> <?php echo $teacher_row['mname'];?> <?php echo $teacher_row['lname'];?></td> 
			
				<td><a href="evaluate.php?instructor_id=<?php echo $row['teacherid']; ?> "><button type="button" class="btn btn-info btn-lg" >Evaluate </button></a></td>
			  </tr>
			<?php
		}

		
	?>  
    </tbody>
  </table>
  </div>
</div>
            </div>
                    
        </div>
         <!-- Footer -->
        <footer class="footer">
        
            <div class="container">
            
                <p class="text-muted"></p>
                
            </div>
            
        </footer>
        
    </body>

   
</html>