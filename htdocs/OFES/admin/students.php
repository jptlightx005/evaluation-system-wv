<?php include('header.php'); ?>

<?php include('navbar_students.php'); ?>


    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								<label><h4>FILTER by:</h4></label>
									<form  method = "POST" class="form-inline" action="sort_students.php">
									Course 
									<select name="course" required>
									<option></option>
									<?php 
									$course_query = mysql_query("select * from course") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option><?php echo $course_row['code']; ?></option>
									<?php  } ?>
									</select>
									&nbsp;&nbsp;&nbsp;&nbsp;
									Year Level
									<select name="year_level" required>
									<option></option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
									</select>
								
									<button type="submit" name="sort_students" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
								
								<?php
	if(isset($_REQUEST['action'])){
		$student_id=$_REQUEST['id'];

		$query=mysql_query("select subject from students where id='$student_id'") or die(mysql_error());
		
		$current_subject = "";
		
		while ($row = mysql_fetch_assoc($query)) {
			$current_subject = $row['subject'];
		}
		if($_REQUEST['action'] == "add_subjects"){
			if($current_subject == ""){
				$query = mysql_query("SELECT code FROM subject") or die(mysql_error());
				
				$subjects = "";
				while($row = mysql_fetch_array($query)){
					$subjects .= "{$row['code']}|---|";
				}
				$subjects = substr($subjects, 0, strlen($subjects) - 5);				
				
				mysql_query("update students set subject='$subjects' where id='$student_id'")or die(mysql_error());
			}
		}else if($_REQUEST['action'] == "randomize_subjects"){
			if($current_subject != ""){
				
				$current_subjects = explode('|---|', $current_subject);;

				$temp = "";
				$subject_count = count($current_subjects);
				for($i = 0; $i <= $subject_count - 1; $i++){

					$temp = $current_subjects[$i];
					$r = rand(0, $subject_count);
					$current_subjects[$i] = $current_subjects[$r];
					$current_subjects[$r] = $temp;

				}
				
				$subject_query = "";
				for($i = 0; $i < 5; $i++){
					if($current_subjects[$i] != "")
						$subject_query .= "{$current_subjects[$i]}|---|";
				}
				$subject_query = substr($subject_query, 0, strlen($subject_query) - 5);
				echo $subject_query . "<br>";
				
				$new_subject_query = "";
				for($i = 5; $i < count($current_subjects) - 1; $i++){
					if($current_subjects[$i] != "")
						$new_subject_query .= "{$current_subjects[$i]}|---|";
				}
				$new_subject_query = substr($new_subject_query, 0, strlen($new_subject_query) - 5);
				
				mysql_query("update students set subjects_evaluate='$subject_query' where id='$student_id'")or die(mysql_error());
				mysql_query("update students set subject='$new_subject_query' where id='$student_id'")or die(mysql_error());
			}
		}
	}
?>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_student.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Student</a></p>
							
                                <thead>
                                    <tr>
                                        <th>Student_No</th>
										<th>Password</th>              
                                        <th>Name</th>                                 
                                        <th>School</th> 
										<th>Course</th>  
                                        <th>Year Level</th>                                 
                                        <th>Section</th>                             
                                        <th>Student Status</th>       
										<th>Subjects</th>    										
                                        <th>Action</th>
										<th>Sbj 2 b evl8d</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
										  <?php  $user_query=mysql_query("select * from students")or die(mysql_error());
											while($row=mysql_fetch_array($user_query)){
											$id=$row['id'];  ?>
												<tr class="del<?php echo $id ?>">
													<td><?php echo $row['studentsID']; ?></td> 
													<td><?php echo $row['password']; ?></td>                              
													<td><?php echo $row['firstname']." ".$row['middlename']."  ".$row['lastname']; ?></td>
													<td><?php echo $row['school']; ?> </td> 
													<td><?php echo $row['course']; ?> </td> 
													<td><?php echo $row['year']; ?></td> 
													<td><?php echo $row['section']; ?></td> 
													<td><?php echo $row['status']; ?></td> 
													<td>
														<select>
														<?php 
			

															$subjects  = $row['subject'];
															$list =  explode('|---|', $subjects);

															foreach ($list as $item) { ?>
																<option><?php echo $item; ?></option>
															<?php }
															?>
														</select>
													
															
													</td>
															<?php include('toolttip_edit_delete.php'); ?>
													<td width="140 ">
															<a  rel="tooltip"  title="Delete Student" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
															<?php include('delete_student_modal.php'); ?>
															<a  rel="tooltip"  title="Edit Student" id="e<?php echo $id; ?>" href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
															<?php if(count($list) - 1 == 0){ ?><a  rel="tooltip"  title="Add Subject" id="a<?php echo $id; ?>" href="<?php echo '?action=add_subjects&id='.$id; ?>" class="btn btn-info"><i class="icon-plus icon-large"></i></a> <?php } ?>
													</td>
													<td>
													<?php
														$subjects_evaluate  = $row['subjects_evaluate'];
														$e_list =  explode('|---|', $subjects_evaluate);
														
														if(count($e_list) - 1 != 0){ // if subjects to be evaluated is not empty
															?>
															<select>
															<?php 
																foreach ($e_list as $item) { ?>
																	<option><?php echo $item; ?></option>
															<?php } ?>
															</select>
															<?php
														}else{ 
															if(count($list) - 1 != 0){
														?>
															<a  rel="tooltip"  title="Random Subjects" id="a<?php echo $id; ?>" href="<?php echo '?action=randomize_subjects&id='.$id; ?>" class="btn btn-info">Randomize</a>
														<?php }else{ ?>
															Please add subjects first!
													<?php	
															}
														}
													?>
														
													</td>
												</tr>
											<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>