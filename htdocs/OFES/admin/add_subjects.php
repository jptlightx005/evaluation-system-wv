<?php include('header.php'); 
include('dbcon.php');?>

<?php include('navbar_students.php'); ?>

<?php $get_id = $_GET['id']; ?>

    <div class="container">
	
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$student_id=$_POST['student_id'];

		$query=mysql_query("select subject from students where id='$student_id'") or die(mysql_error());
		
		$current_subject = "";

		while ($row = mysql_fetch_assoc($query)) {
			$current_subject = $row['subject'];
		}
		
		$subject=$_POST['subject'];
		$subject .= "|---|";
		
		$current_subject .= $subject;
		mysql_query("update students set subject='$current_subject' where id='$student_id'")or die(mysql_error());

		header('location:students.php');
	}
?>
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysql_query("select * from students where id='$get_id'")or die(mysql_error());
		$row=mysql_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Add Subject</div>
			<p><a class="btn btn-info" href="students.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
		<input type="hidden" id="inputEmail" name="student_id" value="<?php echo $row['id']; ?>" placeholder="ID" required>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Subject:</label>
			<div class="controls">
			<select name="subject" required class="span2">
			<option></option>
				<?php
				$query=mysql_query("select * from subject") or die(mysql_error());
				while($row=mysql_fetch_array($query)){ ?>
				<option>
				<?php 
					$subject_select = $row['teacherid'];
					$teacher_query= mysql_query("select * from faculty where teacherid='$subject_select'");
					$teacher_row=mysql_fetch_array($teacher_query);
					
					
					$dept_query= mysql_query("select program from faculty where teacherid='$subject_select'");
					$dept_array=mysql_fetch_array($dept_query);
					$dept_result = $dept_array['program'];
					$dept_query2= mysql_query("select * from course where code='$dept_result'");
					$dept_row=mysql_fetch_array($dept_query2);
					?>
					
				<?php echo $row['code']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Add Subject</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>