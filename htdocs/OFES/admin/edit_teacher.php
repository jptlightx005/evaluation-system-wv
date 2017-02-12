<?php include('header.php'); 
include('dbcon.php');?>
<?php include('navbar_teacher.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from faculty where teacherid='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Student</div>
			<p><a class="btn btn-info" href="teachers.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_teacher.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Faculty ID Number:</label>
			<div class="controls">
			<input type="hidden" id="inputEmail" name="id_teacher" value="<?php echo $row['id_teacher']; ?>" placeholder="ID" required>
			<input type="text" id="inputEmail" name="teacherid" value="<?php echo $row['teacherid']; ?>" placeholder="Student No" required>
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">First Name:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="fname" value="<?php echo $row['fname']; ?>" placeholder="First Name" required>
			</div>
		</div>
        <div class="control-group">
			<label class="control-label" for="inputEmail">Middle Name:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="mname" value="<?php echo $row['mname']; ?>" placeholder="Middle Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Last Name:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lname" value="<?php echo $row['lname']; ?>" placeholder="Last Name" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Course:</label>
			<div class="controls">
			<select name="program" required class="span2">
			<option><?php echo $row['program']; ?></option>
				<?php
				$query=mysql_query("select * from course") or die(mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
				<option><?php echo $row['code']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Academic Rank:</label>
			<div class="controls">
				<select name="rank" required>
					
	<?php 
		$query=mysql_query("select * from faculty where teacherid='$get_id'")or die(mysql_error());
		$row1=mysql_fetch_array($query);
		
		?>					
									<option><?php echo $row1['academic_rank']; ?></option>
									<option>Regular</option>
									<option>Job Hire</option>
									
				</select>
			</div>
		</div>
		
		
		
				<div class="control-group">
			<label class="control-label" for="inputPassword">Subject:</label>
			<div class="controls">
					<select name="subject" class="span2" required>
									<option><?php echo $row1['subject']; ?></option>
						              <?php
				$query=mysql_query("select * from subject") or die(mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
				<option><?php echo $row['title']; ?></option>
				<?php } ?>
					</select>
			</div>
		</div>
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>