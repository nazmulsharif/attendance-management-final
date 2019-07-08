<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Attendance ManageMent System</title>
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="css/jquery-ui.theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
         $conn = new mysqli("localhost","root","","db_sams");
         if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $conpass = $_POST['conpass'];
            if(empty($name)||empty($email)||empty($pass)||empty($conpass)){
                $error = "check all input field";
            }
            else if($pass != $conpass){
                $error = "password does not match";

            }
            else {
                 $data = $conn -> query("INSERT INTO admin(name,email,pass,conpass)VALUES('$name','$email','$pass','$conpass')");
                
            }
             
         } 
    ?>
    <?php
        /*$sql = $conn->query("SELECT vId FROM admin Where name ='Nazmul'");
        $dd= $sql -> fetch_assoc();
        echo $dd['vId'];*/
    ?>


	<div class="areea-wrap">
        <div class="header">
            <a href="index.php"><h2>Attendance Management System</h2></a>
            <a href="search.php"><h3>Check Your Marks</h3></a> 
            <a href="" class="btn sign" data-toggle="modal" data-target="#myModal">Teacher signIn</a>
        </div>

        
        <!--modal start--->
        <div class="modal fade" id="myModal" role="dialog">
             <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Log In</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="login-section">
                            <div class="login-form">
                                <h1> Teacher Login</h1>
                                <form action="login_action.php" method="post">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="email" name="log_email">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="password"name="log_pass">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control btn btn-success" type="submit" placeholder="password"name="submit1" value="logIn">
                                    </div>
                                         
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="reg">
                <h2>Teacher Registration here</h2>
                <?php
                    if(isset($error)){
                        echo "<h3 class='alert alert-danger error'>$error</h3>";
                    }
                    if(isset($data)){
                         echo "<h3 class='alert alert-success'>Thanks for Sign Up</h3>";
                    }

                ?>
                <form action=""method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="email" id="email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Enter Password" id="pass">
                    </div>
                    <div class="form-group">
                        <input type="password" name="conpass" class="form-control" placeholder="confirm Password" id="conpass">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit"value="sign up" class="btn-block btn-primary btn" style="border:none;" id="submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="menu">
                <ul>
                    <li><a href="">About Me</a></li>
                    <li><a href="">Feedback</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/poppers.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	<script>
	  
	</script>
</body>
</html>
