	<div id="add_subject" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">

	<form class="form-horizontal" method="post">
		<div class="control-group">
				<label class="control-label" for="inputPassword">Year Level</label>
				<div class="controls">
				<select name="year" required>
				<option></option>
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
					<option></option>
					<option>1st</option>
					<option>2nd</option>
					<!-- <option>Third</option>
					<option>Fourth</option> -->
				</select>
				</div>
			</div>	
			<div class="control-group">
				<label class="control-label" for="inputEmail">Subject Code</label>
				<div class="controls">
				<input type="text"  name="code" placeholder="Code" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Subject Title</label>
				<div class="controls">
				<input type="text" name="title"  placeholder="Subject Title" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Subject Description</label>
				<div class="controls">
				<input type="text" name="description"  placeholder="Description" required>
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
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['submit'])){
	$code=$_POST['code'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$term=$_POST['term'];
	$year=$_POST['year'];
	$instructor=$_POST['instructor'];
	
	
	
	mysql_query("insert into subject (code,title,description,year,term,teacherid) 
	values('$code','$title','$description','$year','$term','$instructor')")or die(mysql_error());
	}
	?>