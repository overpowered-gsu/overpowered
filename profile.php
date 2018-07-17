<?php
	include('session.php');
	?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
	
	
	<!-- Bootstrap Assets --->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<!-- General Assets --->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	
</head>

<body>
    
	
	<section class="d-flex flex-column">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#" style="margin:10px;font-size:30px;color:rgb(247,147,28);font-weight:bold;font-family:Aldrich, sans-serif;font-style:oblique;margin-right:10px;padding-right:0px;margin-left:5px;">OverPowered</a><a href="index.php" style="margin:10px;">Home </a>
                    <a
                        href="Dashboard.php" data-aos="slide-down" data-aos-once="true" style="margin:10px;">Dashboard</a>
						<a class="text-white" href="profile.php" style="margin:10px;">Profile</a><a href="logout.php" style="margin:10px;">Logout</a><a><i style=" margin-top:120px;font-size:1000%;opacity:0.5;text-color=yellow"; class="fa fa-lightbulb-o" >
  </i></a<a href="#" style="margin:10px;"></a></li>
            </ul>
        </div>
        <div style="height:600px;">
            <div class="container d-flex flex-column flex-grow-0 justify-content-center" style="width:700px;height:650px;margin-right:40px;margin-left:270px;">
                <div class="row d-flex flex-column flex-fill">
                    <div class="col offset-lg-0 d-flex flex-column">
                        <form>
                            <div class="form-row">
                                <div class="col-sm-6 col-lg-12 offset-lg-1" id="InformationUpdateInput" style="margin:0px 0px 0px ;">
                                    <div class="form-group"><label>Update Password</label><input class="form-control" type="text" name="UpdatePasswordInput"></div>
                                    <div class="form-group"><label>Update Email</label><input class="form-control" type="email" name="UpdateEmailInput"></div><button class="btn btn-primary btn-sm" type="submit">Update<i class="fa fa-star"></i></button></div>
                                <div class="col-lg-7">
                                    <div class="d-flex" id="Utilities" style="padding-top:40px;background-color:#e1dbdb;">
                                        <div class="col-lg-7">
                                            <div class="form-group"><label>Utility Provider</label><input class="form-control" type="text" name="UtilityProviderInput"></div><button class="btn btn-primary btn-sm" type="submit">Update<i class="fa fa-star"></i></button></div>
                                        <div
                                            class="col-sm-6 col-lg-4 offset-lg-0">
                                            <div class="form-group"><label>Budget</label><input class="form-control" type="number" name="BudgetInput" placeholder="$.$$"></div>
                                            <div class="form-group"><label>Number of Floors</label><input class="form-control" type="number" name="FloorInput"></div>
                                    </div>
                                </div>
                                <div class="d-flex" id="Utilities" style="padding-top:40px;"></div>
                            </div>
                            <div class="col-lg-4 d-flex flex-column flex-shrink-1" style="height:235px;">
                                <div class="form-group" id="BulbCluster">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Bulb Clusters</button>
                                        <div class="dropdown-menu" role="menu">
											<a class="dropdown-item" role="presentation" href="#">Cluster One</a>
											<a class="dropdown-item" role="presentation" href="#">Cluster Two</a>
											<a class="dropdown-item" role="presentation" href="#">Cluster Three</a></div>
                                    </div><input class="form-control" type="text" name="Bulb Cluster Name" placeholder="Cluster Name"></div>
                                <div class="form-group">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Bulb ID</button>
                                        <div class="dropdown-menu" role="menu">
										<a class="dropdown-item" role="presentation" href="#">Bulb One</a>
										<a class="dropdown-item" role="presentation" href="#">Bulb Two</a>
										<a class="dropdown-item" role="presentation" href="#">Bulb Three</a></div>
                                    </div><input class="form-control" type="text" name="BudgetInput" placeholder="SmartBulb ID Number"></div><button class="btn btn-primary" type="submit">Submit</button></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
	<script src="assets/bootstrap/js/bootstrap-notify.js"></script>
</body>

</html>