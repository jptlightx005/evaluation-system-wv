<?php include('header.php'); ?>

<?php include('navbar_students.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Student</div>
			<p><a href="students.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="student_save.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Student No:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="student_no" placeholder="Student No" required>
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputEmail">Password:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="password" placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">First Name:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" placeholder="First Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Middle Name:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="middlename" placeholder="Middle Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Last Name:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" placeholder="Last Name" required>
			</div>
		</div>

	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Course:</label>
			<div class="controls">
			<select name="course" required class="span2">
			<option></option>
				<?php
				$query=mysql_query("select * from course") or die(mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
				<option value="<?php echo $row['code']; ?>"><?php echo $row['code']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
			<select name="year_level" required class="span2">
									<option></option>
									<option>First Year</option>
									<option>Second Year</option>
									<option>Third Year</option>
									<option>Fourth Year</option>
					</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Section</label>
			<div class="controls">
			<select name="section" required class="span1">
									<option></option>
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
									<option>E</option>
									<option>F</option>
									<option>G</option>
					</select>
			</div>
		</div>
		
		
		
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
					<select name="status" class="span2" required class="span2">
									<option></option>
									<option>Regular</option>
									<option>Irregular</option>
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
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>