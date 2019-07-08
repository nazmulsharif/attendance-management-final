<?php
	$conn = new mysqli('localhost','root','','db_sams');
	/*$conn -> query("SELECT * FROM attend_mark");*/
	session_start();
	if(isset($_POST['sub'])){
	 	$roll = $_POST['roll'];
	 	echo $_SESSION['roll']=$roll;
	 	if(empty($roll)){
			header('location:search.php');	
			$error = "enter valid roll number";	
		}
		else
			header('location:stdViewAttendMark.php');		

	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header bg-light">
            <a href="index.php"><h2>Attendance Management System</h2></a>
            <a href="index.php" class="btn btn-danger" style="float: right;"> Home </a>
        </div>
		<div class="">
			<h2 class="text-center text-primary mt-2">Attendance Marks</h2>
		</div>
		<div class="search w-50 p-5">
			<?php if(isset($error)){ echo $error;}?>
			<form action=""method="post">
				<div class="form-group">
					<label for="" class="text-danger" style="font-size: 30px;">Enter Your Roll</label>
					<input type="text" class="form-control" name ="roll">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success d-block w-25 m-auto" value="Search" name="sub" >
				</div>
			</form>
        </div>
	</div>
</body>
</html>