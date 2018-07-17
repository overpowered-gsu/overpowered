<?php
	include('server.php')
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Register Here</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
        <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
        <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
	<div id="wrapper">
        	<div id="sidebar-wrapper">
            	<ul class="sidebar-nav">
                	<li class="sidebar-brand"> <a href="#" style="margin:10px;font-size:30px;color:rgb(247,147,28);font-weight:bold;font-family:Aldrich, sans-serif;font-style:oblique;margin-right:10px;padding-right:0px;margin-left:5px;">OverPowered</a><a class="text-white" href="index.php"
                        data-bs-hover-animate="swing" style="margin:10px;">Home </a><a href="dashboard.php" data-aos="slide-down" data-aos-once="true" style="margin:10px;">Dashboard</a><a href="#" style="margin:10px;">Data</a><a href="logout.php" style="margin:10px;">Logout</a>
                              <a href="#" style="margin:10px;"></a>
                        </li>
                	<li> <a href="#"></a></li>
                	<li> </li>
                	<li> </li>
            	</ul>
        	</div>
        	<div class="page-content-wrapper"></div>
    	</div>

<div class="login-clean">
	<form class="float-none flex-grow-0 flex-fill justify-content-center align-items-center align-content-around align-self-center" method="post" style="margin:0px 550px;background-color:#f1f7fc;">
    		<h2 class="sr-only">Registration Form</h2>
    		<div class="justify-content-center align-content-center illustration"><i class="icon ion-ios-lightbulb" style="background-color:rgba(255,255,255,0.2);color:rgb(247,147,28);"></i></div>
		<?php include('errors.php'); ?>
   	 	<div class="form-group">
        		<input type="text" name="firstName" value="<?php echo $firstName; ?>" required placeholder="First Name" autofocus class="form-control" id="firstname" />
        		<input type="text" name="lastName" value="<?php echo $lastName; ?>" required placeholder="Last Name" autofocus class="form-control" id="lastname" />
        		<input type="email" name="email" value="<?php echo $email; ?>" required placeholder="Email" autofocus class="form-control" id="email" />
        		<input type="password" name="password_1" required placeholder="Password" autofocus class="form-control" id="password" />
			<input type="password" name="password_2" required placeholder="Confirm Password" autofocus class="form-control" id="password" />
		</div>
    		<div class="form-group">
			<button class="btn btn-primary active btn-block" type="submit" name="reg_user" style="background-color:rgb(247,147,28);">Register</button>
		</div>
		<p>
			Already a member? <a href="index.php">Sign in</a>
		</p>
	</form>
</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
	<script src="assets/bootstrap/js/bootstrap-notify.js"></script>

</body>
</html>

