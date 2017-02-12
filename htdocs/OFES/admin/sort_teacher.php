<?php include('header.php'); ?>

<?php include('navbar_teacher.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Faculty Table</strong>
                                </div>
								<label><h4>FILTER by:</h4></label>
									<form  method = "POST" class="form-inline" action="sort_teacher.php">
									Program
									<select name="program" required>
									<option></option>
									<?php 
									$course_query = mysql_query("select * from course") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option><?php echo $course_row['code']; ?></option>
									<?php  } ?>
									</select>
									&nbsp;&nbsp;&nbsp;&nbsp;
									<button type="submit" name="sort_teachers" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
								</form>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_teacher.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Faculty</a></p>
							<thead>
                                    <tr>
                                        <th>Teacher_ID</th>
                                   <!-- <th>Password</th>  -->                    
                                        <th>Name</th>                                 
                                        <th>Program</th> 
								<?php										
                                 /*        <th>Gender</th>                                 
                                        <th>Address</th>                                 
                                        <th>Contact No</th>    
 */
									?>										
                                                                  
                                        <th>Academic Rank</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
								 <?php if (isset($_POST['sort_teachers'])){
									$program = $_POST['program'];
								 ?>
								 
								 
                                  <?php  $user_query=mysql_query("select * from faculty where program = '$program' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['teacherid'];  ?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['teacherid']; ?></td> 
                                           
                                     <td><?php echo $row['fname']." ".$row['mname']."  ".$row['lname']; ?></td> <td width="80"><?php echo $row['program']; ?> </td> 
									<td><?php echo $row['password']; ?></td>        
									<?php	
                              /*       <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['address']; ?></td> 
                                    <td><?php echo $row['contact']; ?></td>  */
									
									?>
                              
                                  
									 <td width="80"><?php echo $row['subject']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="150">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>