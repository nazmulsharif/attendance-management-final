<?php
	session_start();
	$roll=$_SESSION['roll'];
	$conn = new mysqli('localhost','root','','db_sams');
	if(empty($_SESSION['roll'])){
		header('location:search.php');
	}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Attendance Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<div class="text-center header mt-5 bg-light">
			<h2>Student Attendance Management System</h2>
			<a href="index.php" class="btn btn-danger" style="float: right;"> Home </a>
			<a href="app_form.php" class="btn btn-primary" style="float: right;"> Application Form </a>
			<a href="search.php" class="btn btn-secondary" style="float: right;"> Back </a>
		</div>
	
<!-- 	<div class='alert alert-danger' style=""><strong>Error!</strong>student Roll Missing</div> -->
	<div class="text-center mt-2">
		</div>
		<div class="">
			<h2 class="text-center text-primary">Attendance Marks</h2>
		</div>
		<div class="mt-5">
			<form action=""method="post">
			<table class="table table-striped">
				<tr>
					<th width="20%">Roll</th>
					<th width="20%">Attendance Percentage</th>
					<th width="20%">Attendance Marks</th>
					<th width="20%">Fine</th>
					<th width="20%">comment</th>
				</tr>
				<?php
					$data = $conn -> query("SELECT * FROM attend_mark WHERE roll = '$roll' ORDER BY id DESC");
					$roll1=1;
					if($data -> num_rows){
					while($dd = $data->fetch_assoc()):?>
						<td><?php echo $roll1=$dd['roll'];?></td>
						<td><?php echo $dd['attend_per'];?></td>
						<td><?php echo $dd['attend_mark'];?></td>
						<td><?php echo $dd['fine'];?></td>
						<td><?php echo $dd['cmnt'];?></td>	
						<?php 
							if($roll1==$roll){
								break;
							}
						?>				
					<?php endwhile;
					}
					else{
						echo "<h2 class='alert alert-danger text-center'>".'Sorry! Roll number doesnot exist'."</h2";
						}
					?>
			</table>
		</form>
		</div>
		
	<?php include 'inc/footer.php'?>
	</div>
</body>