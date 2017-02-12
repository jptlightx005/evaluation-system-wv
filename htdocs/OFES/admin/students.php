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
													<td width="80"><?php echo $row['school']; ?> </td> 
													<td width="80"><?php echo $row['course']; ?> </td> 
													<td width="80"><?php echo $row['year']; ?></td> 
													<td width="80"><?php echo $row['section']; ?></td> 
													<td width="80"><?php echo $row['status']; ?></td> 
													<td><?php 
			

															$subjects  = $row['subject'];
															$list =  explode('|---|', $subjects);
															foreach ($list as $item) {?>
															<?php echo $item;?>--<?php
															}?>
															
													</td>
															<?php include('toolttip_edit_delete.php'); ?>
													<td width="140 ">
															<a  rel="tooltip"  title="Delete Student" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
															<?php include('delete_student_modal.php'); ?>
															<a  rel="tooltip"  title="Edit Student" id="e<?php echo $id; ?>" href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
															<a  rel="tooltip"  title="Add Subject" id="a<?php echo $id; ?>" href="add_subjects.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="icon-plus icon-large"></i></a>
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