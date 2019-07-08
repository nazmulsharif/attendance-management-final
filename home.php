	<?php 
		session_start();
		if(isset($_SESSION['login']))
		{
			if($_SESSION['login']!=1)
			{
				header("location:http://localhost/sams1/index.php");
				
			}
			
		}
		else
		{
			header("location:http://localhost/sams1/index.php");
		}
	?>
	<?php require 'inc/header.php'?>
	<?php require 'lib/student.php'?>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("form").submit(function(){
				var roll = true;
				$(':radio').each(function(){
					name = $(this).attr('name');
					if(roll && !$(':radio[name="' + name + '"]:checked').length){
						$('.alert').show();
						alert(name + " Roll Missing !");
						roll = false;
					}
				});
				return roll;
			});
		});
	
		
	</script> -->
	<?php
		error_reporting(0);
		$stu= new student();
		$curr_date= date('Y-m-d');
		if($_SERVER['REQUEST_METHOD']=='POST'){
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($curr_date,$attend);

	} 
	?>
	<?php
		if(isset($insertattend)){
			echo $insertattend;
		}
	?>
<!-- 	<div class='alert alert-danger' style=""><strong>Error!</strong>student Roll Missing</div> -->
	<div class="text-center mt-2">
			<h2 style="font-size: 20px;">Date:<?php echo $curr_date;?></h2>
		</div>
		<div class="">
			<a href="add.php" class="btn btn-success">Add Student</a>
			<a href="view.php"class="btn btn-success" style="float: right;">View All</a>
		</div>
		<div class="mt-5">
			<form action=""method="post">
			<table class="table table-striped">
				<tr>
					<th width="25%">Serial</th>
					<th width="25%">Student Name</th>
					<th width="25%">Roll</th>
					<th width="25%">Attendance</th>
				</tr>
			<?php 

				$get_student = $stu->getStudents();
				if($get_student){
					$i=0;
					while($value= $get_student->fetch_assoc()){
						$i++;
				
				
			?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $value['name']?></td>
					<td><?php echo $value['roll']?></td>
					<td>
						<input type="radio" value="present" name="attend[<?php echo $value['roll']?>]">P
						<input type="radio" value="absent" name="attend[<?php echo $value['roll']?>]">A
					</td>
				</tr>
		<?php } } ?>
				
				<tr>
					<td colspan="4"><input type="submit" value="Submit" name="submit"class="btn btn-success"></td>
				</tr>
			</table>
		</form>
		</div>
		
	<?php include 'inc/footer.php'?>