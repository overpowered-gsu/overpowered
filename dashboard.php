<?php
    include('session.php');
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	
	<!--require script-->
	<script src = "node_modules/clientside-require/dist/bundle.js"></script>
	
	
<!-- Bootstrap Assets --->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label.css">
    <link rel="stylesheet" href="assets/css/Rounded-Slider-with-Label.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/AlertBanner.css">
<!--Web Assets-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

	
</head>

<body>

<!--Sidebar Menu-->
    <div id="wrapper">
        <div></div>
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> 
				<!--Sidebar Items-->
				<a href="index.php" style="margin:10px;font-size:30px;color:rgb(247,147,28);font-weight:bold;font-family:Aldrich, sans-serif;font-style:oblique;">OverPowered</a>
				<a href="index.php" style="margin:10px;">Home</a>
                <a class="text-white" href="Dashboard.php" style="margin:10px;">Dashboard</a>
				<a href="profile.php" style="margin:10px;">Profile</a>
				<a href="logout.php" style="margin:10px;">Logout</a>
<!--Lightbulb Demo Menu Button-->
				<a><i style="margin-top:120px;font-size:1000%;opacity:0.5;color="yellow"; class="fa fa-lightbulb-o" >
				</i></a></li>				 
						</ul>
        </div>
    </div>
	
	
  
<!--Elements Container-->  
<div class="d-flex flex-column flex-grow-1 flex-fill" style="height:1400px;width:1950px;margin-left:250px;background-color:#787f82;background-position:50%50%;background-repeat:no-repeat;background-size:contain;">

<!--tableau Embedded-->
	
<div class='tableauPlaceholder' id='viz1531497173542' style='position: relative'><noscript><a href='#'><img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ov&#47;OverpoweredDashboard&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='OverpoweredDashboard&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Ov&#47;OverpoweredDashboard&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1531497173542');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='1000px';vizElement.style.height='827px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
	
	<!--Bulb Control Container Space-->
    <div class="container d-flex flex-row flex-grow-0 flex-shrink-0 flex-fill" style="height:500px;width:950px;margin-right:0px;margin-left:100px;margin-top:20px;">

		
<!--Bulb Dropdown-->
        <div class="row" style="width:400px;margin-left:0px;margin-right:50px;height:250px;">
            <div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-top:20px;">Bulb Selection</button>
                    <div role="menu" class="dropdown-menu">
					<a role="presentation" href="#" class="dropdown-item">Bulb One</a>
					<a role="presentation" href="#" class="dropdown-item">Bulb Two</a>
					<a role="presentation" href="#" class="dropdown-item">Bulb Three</a>
                        </div>
                </div>
<!--Bulb Range Slider/Toggle-->
			<div class="col-lg-12 col-xl-12 offset-lg-0" style="background-color:#eeeeee;margin-top:5px;border-style:solid;border-color:#007BFF;">
                <p class="text-center">
					<strong>Bulb Brightness Range</strong></p>
						<form name="rangeForm">
						<input type="range" style="width:200px;margin-left:85px;" name="bulbInputName" id="bulbInput" value="137" min="0" max="254" oninput="bulbOutput.value = bulbInput.value"></input>
						<div></div>
						<output class="text-center" type="button" style="width:200px;margin-left:85px" name="bulbOutputName" id="bulbOutput">137</output>
						</form>
						<div class="row" style="width:400px;padding:10px;height:100px;margin-top:0px;">
						<div class="column" style="width:400px;margin-right:1px;margin-left:10px;margin-top:5px;background-color:#eeeeee;">
							<p class="text-center">
							<strong>Bulb On/Off</strong></p>
			<div>
			<input onclick= "changeB(this,event); bulbOn()" type="button" style="width:200px;margin-left:80px;background-color: #007BFF;border-radius: 4px;border-style:none" value="On" id="Button1">
		</div>
	</div>
	</div>
	</div>
	</div>
	
<!--Cluster Dropdown-->
	<div class="row" style="width:400px;margin-left:0px;margin-right:50px;height:250px;">
            <div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-top:20px;">Cluster Selection</button>
                    <div role="menu" class="dropdown-menu">
					<a role="presentation" href="#" class="dropdown-item">Cluster One</a>
					<a role="presentation" href="#" class="dropdown-item">Cluster Two</a>
					<a role="presentation" href="#" class="dropdown-item">Cluster Three</a>
                        </div>
                </div>
	<!--Cluster Range and output-->
            <div class="col-lg-12 col-xl-12 offset-lg-0" style="background-color:#eeeeee;margin-top:5px;border-style:solid;border-color:#007BFF;">
                <p class="text-center">
					<strong>Cluster Brightness Range</strong></p>
						<form name="rangeForm">
							<input type="range" style="width:200px;margin-left:85px;" name="clusterInputName" id="clusterInput" value="137" min="0" max="254" oninput="clusterOutput.value = clusterInput.value"></input>
						<div></div>
							<output class="text-center" type="button" style="width:200px;margin-left:85px" name="clusterOutputName" id="clusterOutput">137</output>
						</form>
							<div class="row" style="width:400px;padding:10px;height:100px;margin-top:0px;">
								<div class="column" style="width:400px;margin-right:1px;margin-left:10px;margin-top:5px;background-color:#eeeeee;">
									<p class="text-center"><strong>Cluster On/Off</strong></p>
	<!--Cluster On-Click events-->
			<div>
				<input onclick= "changeC(this,event)" type="button" style="width:200px;margin-left:80px;background-color: #007BFF;border-radius: 4px;border-style:none" value="On" id="Button1">
				</div>
            </div>
                    
        
                </div>
            </div>
        </div>
		
    </div>
</div>





	<!--Footer-->
<footer>
	<!--fun scripts-->
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
	<script src="assets/bootstrap/js/bootstrap-notify.js"></script>
	
	<!--bulb functions-->
	<script src='./scripts/bulbFuncs.js'></script>


	
	<script> //Button Change + Alert.
	function changeB(btnEle,evt) //Toggle On/Off for Buttons.
{   
 
    if (btnEle.value=="On") {
		btnEle.value = "Off";
	}
	else {btnEle.value = "On";}
	var status = btnEle.value;	//Pass status to notify function.
	$.notify("Bulb turning "+status);
}
	</script>
	
	<script> //Cluster Change + Alert.
	function changeC(btnEle,evt) //Toggle On/Off for Buttons.
{   
 
    if (btnEle.value=="On") {
		btnEle.value = "Off";
	}
	else {btnEle.value = "On";}
	var status = btnEle.value;	//Pass status to notify function.
	$.notify('Cluster turning '+status);
}
	</script>
	
	
	
	<script>
	$.notify({
		// option
		message: 'Welcome <?php echo $login_session; ?>' 
	},{
		// settings(success,warning,info,error)
		type: 'info'
	});
	</script>

	
	</footer>
	
	</body>

</html>