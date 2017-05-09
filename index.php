<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
		Progress report
	</title>
	<meta name="description" content="Progress report of sevasetu's citizen care subprogram">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	
	.border{
		border-right-style: dashed;
	}
	/* for screens that are at least 320 pixels wide but less than or equal to 640 pixels wide */
	@media screen and (min-width:320px) and (max-width:640px) and (orientation:portrait) {
		
  		body{font-size: 10px;}
  		.border{
  			border-right-width: 0px;
  		}

	}
	@media screen and (min-width:320px) and (max-width:640px) and (orientation:landscape) {
		
  		body{font-size: 14px;}
  		.border{
  			border-right-width: 0px;
  		}

	}
	h1{
		font-size: 3em;
	}
	h2{
		font-size: 2em;
	}
	hr.style6 {
	background-color: #fff;
	border-top: 2px dotted #8c8b8b;
	}

	</style>
</head>
<body>
	<div class="container-fluid" style="background-color:#eceff1;" >
		<div class="row">
			<div id="div1-1" class="col-xs-1" style="padding: 0px;">
				<a href="http://sevasetu.org/">
					<img class="img-responsive" src="img/logo.jpg" alt="logo" height=100 width=75 style="position: relative;left:7%;margin-top:1em;"></img>
				</a>
			</div>
			<div id="div1-2" class="col-xs-11" style="text-align:center;">
				
				<h1 style="position: relative ;margin-top: 1%;font-family: Andale Mono,AndaleMono,monospace;font-weight: bold;">Seva Setu</h1>
				
				<h2 style="position: relative ;font-family: Andale Mono,AndaleMono,monospace;">Progress Report: Citizen Care</h2>
				<h2 style="position: relative ;font-family: Andale Mono,AndaleMono,monospace;">April - June 2017</h2>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<hr style="margin: 0.5%;">
		<div class="row">
			<div class="col-sm-7 button-wrapper border" style="">
				<h1 style="margin:0 auto;">Title Of Project</h1>
				<br>
				<br>
				<div class="progress" style="width:100%;height:4.35em;">
    				<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;background-color:#7b1fa2">
    				<h2 style="color:lime;top: 25%;position: relative;margin-top:0px;-">70% Completed!!</h2>
    				</div>
  				</div>
  				<br>
  				<br>
  				<br>
  				<br>
  				<br>
			</div>
			<div class="col-sm-5 div3" style="">
				<h1 style="text-align:center;margin:0 auto;">Area of work</h1>
				<br>
				<div class="row">
					<div class="col-sm-7">
						<img class="img-responsive" src="img/vaishali_resized.png" style="width: 100%"></img>
					</div>
					<div class="col-sm-5">
						<h2>Block:</h2>
						<h2>District:</h2>
						<h2>State:</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<hr style="margin: 0.5%;">
		<div class="row">
			<div class="col-xs-7" style="border-style: double;">
				<h4>Text 1</h4>
			</div>
			<div class="col-xs-5" style="border-style: double;">
				<h4>Number 1</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7" style="border-style: double;">
				<h4>Text 2</h4>
			</div>
			<div class="col-xs-5" style="border-style: double;">
				<h4>Number  2</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-7" style="border-style: double;">
				<h4>Text 3</h4>
			</div>
			<div class="col-xs-5" style="border-style: double;">
				<h4>Number  3</h4>
			</div>
		</div>
	</div>

	

</body>
	<!-- Initializing Google Maps -->
<script>
	$(document).ready(function(){
		var $window=$(window);
		console.log(window.orientation);
		function checkWidth(){

			if ($window.width() <= 640) {
            $('#div1-1').removeClass('col-xs-1').addClass('col-xs-2');
            $('#div1-2').removeClass('col-xs-11').addClass('col-xs-10');
            console.log('resized');
        	};
		}
		checkWidth();
		$(window).resize(checkWidth);
	});
</script>
</html>