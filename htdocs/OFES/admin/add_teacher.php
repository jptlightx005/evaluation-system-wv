<?php include('header.php'); ?>

<?php include('navbar_teacher.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add a Faculty</div>
			<p><a href="teachers.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="teacher_save.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Faculty ID Number:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="teacherid" placeholder="Faculty ID Number" required>
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
			<input type="text" id="inputEmail" name="fname" placeholder="First Name" required>
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputEmail">Middle Name:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="mname" placeholder="Middle Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Last Name:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lname" placeholder="Last Name" required>
			</div>
		</div>

	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Program</label>
			<div class="controls">
			<select name="program" required class="span2">
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
			<label class="control-label" for="inputPassword">Academic Rank:</label>
			<div class="controls">
					<select name="rank" class="span2" required>
									<option></option>
									<option>Regular</option>
									<option>Job Hire</option>
					</select>
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputPassword">Subject</label>
			<div class="controls">
					<select name="subject" class="span2" required>
									<option></option>
                                    <?php
				$query=mysql_query("select * from subject") or die(mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
				<option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
				<?php } ?>
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