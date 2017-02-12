	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
	<div class="control-group">
				<label class="control-label" for="inputPassword">Year Level</label>
				<div class="controls">
				<select name="year" required>
				<option><?php echo $row['year'] ?></option>
					<option>First Year</option>
					<option>Second Year</option>
					<option>Third Year</option>
					<option>Fourth Year</option>
				</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Term</label>
				<div class="controls">
				<select name="term" required>
					<option><?php echo $row['term']; ?></option>
					<option>1st</option>
					<option>2nd</option>
				
				
				</select>
				</div>
			</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">Subject Code</label>
						<div class="controls">
						<input type="hidden"  name="id"  value="<?php echo $row['subject_id']; ?>">
						<input type="text"  name="code" placeholder="Subject Code" required value="<?php echo $row['code']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Subject Title</label>
						<div class="controls">
						<input type="text" name="title"  placeholder="Subject Title" required value="<?php echo $row['title']; ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Subject Description</label>
						<div class="controls">
						<input type="text" name="description"  placeholder="Subject Description" required value="<?php echo $row['description']; ?>">
						</div>
					</div>
					
					
						
				
			
			<div class="control-group">
				<label class="control-label" for="inputPassword">Instructor</label>
				<div class="controls">
						<select name="instructor" required>
									<option></option>
									<?php 
									$course_query = mysql_query("select * from faculty") or die(mysql_error());
									while($course_row = mysql_fetch_array($course_query)){
									?>
									<option value="<?php echo $course_row['teacherid']; ?>"><?php echo $course_row['fname']; ?> <?php echo $course_row['lname'];?></option>
									<?php  } ?>
									</select>
				</div>
			</div>
					
					
					
					
					
					<div class="control-group">
						<div class="controls">
						<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
						</div>
					</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$subject_id=$_POST['id'];
	$code=$_POST['code'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	
	$year = $_POST['year'];
	
	
		$instructor=$_POST['instructor'];
	
	
	
	
	mysql_query("update subject set code='$code', title='$title', description='$description',  year = '$year' ,  	teacherid = '$instructor'    where subject_id='$subject_id'")or die(mysql_error()); ?>
	<script>
	window.location="subject.php";
	</script>
	<?php
	}
	?>