<?php include('admin/dbcon.php');
$facultyid= $_GET['instructor_id'];
$studentid= $user['studentsID'];

$teacher_query= mysql_query("select * from faculty where teacherid='$facultyid'");
$teacher_row=mysql_fetch_array($teacher_query);
$student_query= mysql_query("select * from students where studentsID='$studentid'");
$student_row=mysql_fetch_array($student_query);	?>


<?php include('header.php'); ?>
<!DOCTYPE html> 
<html>
<body class="body">

<thead></thead>
<div class="jumbotron">
                       <div class="container">
                          <b><font size="3">Name:</b> <?php echo $user['firstname']; ?> <?php echo $user['middlename']; ?> <?php echo $user['lastname']; ?>&nbsp;&nbsp;&nbsp;</>
                           <b><font size="3"> Year and Section:</b> <?php echo $user['year'].'-'.$user['section']; ?>&nbsp;&nbsp;&nbsp;
						   <b><font size="3">School: </b> <?php echo $user['school']; ?> &nbsp;&nbsp;&nbsp;
                          <b><font size="3">Course: </b> <?php echo $user['course']; ?>&nbsp;&nbsp;&nbsp;
						  <br><br><br>
						  <p>
						  <b>Instruction:</b> Please evaluate the faculty using the scale below. Rate down the faculty beside the question.
						  </p>
							
							
						<b>5 - Outstanding</b> The perfomance almost always exceeds the job requirements. The faculty as an exceptional role model.<br>
						<b>4- Very Satisfactory</b>  The performance meets and often exceeds the job requirements.<br>
						<b>3 - Satisfactory</b> The performance meets the job requirements.<br>
						<b>2 - Fair</b> The performance needs some development to meet the job requirements.<br>
						<b>1 - Poor</b> The faculty fails to meet the job requirements.<br><br>
                       </div>
					   <p><b><font size="6">Faculty to Rate:</b><i> <?php echo $teacher_row['fname']; ?> <?php echo $teacher_row['mname']; ?> <?php echo $teacher_row['lname']; ?>&nbsp;&nbsp;&nbsp;</>
                    </p></font></i></div>
<tbody><form class="form-horizontal" method="POST" action="evaluation_process.php" enctype="multipart/form-data" >
<table width="1300" border="0" align="center">
<tr>
          <td colspan="5">
		  <table width="100%" id="rounded-corner" cellpadding="10" cellspacing="0" border="0" align="center">
		  <thead>
		  <tr >
		     <th width="5%" class="rounded-company" align="center">Number</th>			 
			 <th width="86%" class="rounded-q1" align="center">Questions</th>
			 <th width="50%" class="rounded-company" align="center">
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rating</th>
			 <th width="8%" class="rounded-company" align="center"></th>
			 <th width="8%" class="rounded-company" align="center"></th>
			 <th width="8%" class="rounded-company" align="center"></th>
		  </tr>

		  </thead>
		<input type="hidden" id="inputEmail" name="faculty_id" value="<?php echo $facultyid; ?>" placeholder="ID" required>
		<input type="hidden" id="inputEmail" name="faculty_name" value="<?php echo $teacher_row['fname']; ?> <?php echo $teacher_row['mname']; ?> <?php echo $teacher_row['lname']; ?>" placeholder="ID" required>
		<input type="hidden" id="inputEmail" name="student_name" value="<?php echo $student_row['firstname'];?> <?php echo $student_row['middlename']; ?> <?php echo $student_row['lastname']; ?>" placeholder="ID" required>
		
							 <thead>	
							<th  class="rounded-company" align="center"></th>
							 <th  class="rounded-company" align="center">Commitment (25%)</th>
							 
							 <th  class="" align="center">5 - Outstanding  4 - Very Satisfactory  3 - Satisfactory  2 - Fair  1  - Poor </th>
							 </thead>
								
								
								
								</tbody>
								
								<?php
									$number = array('1','2','3','4','5');
									foreach ($number as $value){
									$sql_que="select * from evaluation_question where q_id='$value'";
									$res_que=mysql_query($sql_que) or die(mysql_error());
									
							
									while($row_que=mysql_fetch_array($res_que))
									{ ?> <?php
										echo "<tr>";
										echo "<td align=\"center\">".$row_que['e_id']."</td>";
										echo "<td>".$row_que['question']."</td>";
										?> <td align='center'> 
								  <div class='control-group'>
								<label class='control-label' for='rating'></label>
								<div class='controls'>
										<select name='<?php echo $value;?>' class='span1' required>
												<option></option>
												<option>5</option>
												<option>4</option>
												<option>3</option>
												<option>2</option>
												<option>1</option>
										</select>
								<?php
									
									} }
								  ?>	
								 
								</div>
		</div></td>
							  
								<td>  </td> 
			<thead>
								<th  class="rounded-company" align="center"></th>
								
								   <th  class="rounded-company" align="center">Knowledge of the Subject (25%)</th>
								    <th  class="" align="center">5 - Outstanding  4 - Very Satisfactory  3 - Satisfactory  2 - Fair  1  - Poor </th>
								 </thead>
									
								
								<?php
									$number = array('6','7','8','9','10');
									foreach ($number as $value){
									$sql_que="select * from evaluation_question where q_id='$value'";
									$res_que=mysql_query($sql_que) or die(mysql_error());
									
							
									while($row_que=mysql_fetch_array($res_que))
									{ ?> <?php
										echo "<tr>";
										
										echo "<td align=\"center\">".$row_que['e_id']."</td>";
										echo "<td>".$row_que['question']."</td>";
										?> <td align='center'> 
								  <div class='control-group'>
								<label class='control-label' for='rating'></label>
								<div class='controls'>
										<select name='<?php echo $value;?>' class='span1' required>
												<option></option>
												<option>5</option>
												<option>4</option>
												<option>3</option>
												<option>2</option>
												<option>1</option>
										</select>
								<?php
									
									} }
								  ?>	
			<td>  </td>	
			<thead>
									<th  class="rounded-company" align="center"></th>
									
									   <th  class="rounded-company" align="center">Teaching for Independent Learning (25%)</th>
									    <th  class="" align="center">5 - Outstanding  4 - Very Satisfactory  3 - Satisfactory  2 - Fair  1  - Poor </th>
									 </thead>
										
									
									<?php
									$number = array('11','12','13','14','15');
									foreach ($number as $value){
									$sql_que="select * from evaluation_question where q_id='$value'";
									$res_que=mysql_query($sql_que) or die(mysql_error());
									
							
									while($row_que=mysql_fetch_array($res_que))
									{ ?> <?php
										echo "<tr>";
										
										echo "<td align=\"center\">".$row_que['e_id']."</td>";
										echo "<td>".$row_que['question']."</td>";
										?> <td align='center'> 
								  <div class='control-group'>
								<label class='control-label' for='rating'></label>
								<div class='controls'>
										<select name='<?php echo $value;?>' class='span1' required>
												<option></option>
												<option>5</option>
												<option>4</option>
												<option>3</option>
												<option>2</option>
												<option>1</option>
										</select>
								<?php
									
									} }
								  ?>	
			<td>  </td> 
			<thead>
									<th  class="rounded-company" align="center"></th>
									
									   <th  class="rounded-company" align="center">Management and Learning (25%)</th>
									    <th  class="" align="center">5 - Outstanding  4 - Very Satisfactory  3 - Satisfactory  2 - Fair  1  - Poor </th>
									 </thead>
										
									<div align="center">
			<button name="submit" type="submit" class="btn btn-success" ><i class="icon-ok icon-large" ></i>&nbsp;Submit</button>

		<a href="home_student.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back &nbsp;&nbsp; </a>
			</div>
									<?php
									$number = array('16','17','18','19','20');
									foreach ($number as $value){
									$sql_que="select * from evaluation_question where q_id='$value'";
									$res_que=mysql_query($sql_que) or die(mysql_error());
									
							
									while($row_que=mysql_fetch_array($res_que))
									{ ?> <?php
										echo "<tr>";
										
										echo "<td align=\"center\">".$row_que['e_id']."</td>";
										echo "<td>".$row_que['question']."</td>";
										?> <td align='center'> 
								  <div class='control-group'>
								<label class='control-label' for='rating'></label>
								<div class='controls'>
										<select name='<?php echo $value;?>' class='span1' required>
												<option></option>
												<option>5</option>
												<option>4</option>
												<option>3</option>
												<option>2</option>
												<option>1</option>
										</select>
								<?php
									
									} }
								  ?>	
										<td>  </td>
		 
		  </tbody>
		  <?php include('evaluation_process.php');?>
		  
</table>
 
			
		
  </form>	
  
</body>

</html>