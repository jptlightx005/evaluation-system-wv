<?php include('header.php'); 
include('dbcon.php');?>

<?php include('navbar_students.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from students where id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Student</div>
			<p><a class="btn btn-info" href="students.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="update_students.php" enctype="multipart/form-data">
			<div class="control-group">
			<label class="control-label" for="inputEmail">Student No:</label>
			<div class="controls">
			<input type="hidden" id="inputEmail" name="student_id" value="<?php echo $row['id']; ?>" placeholder="ID" required>
			<input type="text" id="inputEmail" name="student_no" value="<?php echo $row['studentsID']; ?>" placeholder="Student No" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Password:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">School</label>
			<div class="controls">
			<select name="school" required class="span2">
									<option><?php echo $row['school']; ?></option>
									<option>Infomation and Communications Technology</option>
									<option>Business and Management</option>
									<option>Education</option>
									<option>Industrial Technology</option>
									
					</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Course:</label>
			<div class="controls">
			<select name="course" required class="span2">
			<option><?php echo $row['course']; ?></option>
				<?php
				$query=mysql_query("select * from course") or die(mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
				<option><?php echo $row['code']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Year Level:</label>
			<div class="controls">
				<select name="year_level" required>
					
	<?php 
		$query=mysql_query("select * from students where id='$get_id'")or die(mysql_error());
		$row1=mysql_fetch_array($query);
		
		?>					
									<option><?php echo $row1['year']; ?></option>
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
									<option><?php echo $row1['section']; ?></option>
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
					<select name="status" class="span2" required>
									<option><?php echo $row1['status']; ?></option>
									<option>Regular</option>
									<option>Irregular</option>
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