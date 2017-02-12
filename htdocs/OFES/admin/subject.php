<?php include('header.php'); ?>

<?php include('navbar_subject.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">			     
										
										
										 
     <!-- Modal add user -->
	<?php include('modal_add_subject.php'); ?>
										
			</div>
			<div class="span12">
			
			 <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Subject Table</strong>
                                </div>
			
			
						<label><h4>FILTER by:</h4></label>
									<form  method = "POST" class="form-inline" action="sort_subject.php">
								
									Year Level
									<select name="year" required>
									<option></option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
									</select>
										&nbsp;&nbsp;&nbsp;&nbsp;
								
											&nbsp;&nbsp;&nbsp;&nbsp;
									Course	 
									<select name="course_id" required>
									<option></option>
										<?php
										$query=mysql_query("select * from course") or die(mysql_error());
										while($row=mysql_fetch_array($query)){ ?>
										<option value="<?php echo $row['course_id']; ?>"><?php echo $row['code']; ?></option>
										<?php } ?>
									<!-- <option>Third</option>
									<option>Fourth</option> -->
									</select>
									
								
								
									<button type="submit" name="sort_subject" class="btn"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
									</form>
								
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                               <p><a href="#add_subject" data-toggle="modal" class="btn btn-success"><i class="icon-plus icon-large"></i>&nbsp;Add Subject</a></p>
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Subject Title</th>                                 
                                        <th>Description</th>  
										
                                        <th>Year Level</th>                                 
                                        <th>Term</th>                              
                                                                        
                                    
										<th>Instructor</th>  										
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from subject")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['subject_id']; 
									?>
									<?php 
										$subject_select = $row['teacherid'];
										$teacher_query= mysql_query("select * from faculty where teacherid='$subject_select'");
										$teacher_row=mysql_fetch_array($teacher_query);
										
										
										?>

										<tr class="del<?php echo $id ?>">
										<td><?php echo $row['code']; ?></td> 
										<td><?php echo $row['title']; ?></td> 
										<td><?php echo $row['description']; ?></td>
										<td><?php echo $row['year']; ?></td> 
										<td><?php echo $row['term']; ?></td> 
										
										<td><?php echo $teacher_row['fname'];?>&nbsp; <?php echo $teacher_row['mname'];?> <?php echo $teacher_row['lname'];?></td> 
									 
										
                                    <td width="100">
                                        <a  href="#delete_subject<?php echo $id; ?>" data-toggle="modal"  class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
										<?php include('delete_subject_modal.php'); ?>
                                        <a rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="#edit<?php echo $id; ?>" data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    	<?php include('modal_edit_subject.php'); ?>
									</td>
									
									     <!-- Modal edit user -->
								
                                    </tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							

			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>