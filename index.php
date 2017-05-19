<?php
	$url = "https://docs.google.com/spreadsheets/d/1naps3I3O9I_Ncw-F3wO3Bcmt-WU8uBVujI5jfgDzzAw/pub?output=csv";
	
	$data = get_csv_content($url);
	$is_valid = validate_data($data);
	
	$data_to_publish = array(1014, 817, 93, 6);
	
	if($is_valid){
		$data_to_publish[0]=$data[0][2];
		$data_to_publish[1]=$data[1][2];
		$data_to_publish[2]=$data[2][2];
		$data_to_publish[3]=$data[4][2];
		if(remove_html_tags($data_to_publish)){
				$data_to_publish[3]=(int)(($data_to_publish[3]/100)*($data_to_publish[1]));
		}	
	}
	
	function get_csv_content($spreadsheet_url){
		if(!ini_set('default_socket_timeout', 15)) 
		echo "<!-- unable to change socket timeout -->";
		if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				$spreadsheet_data[] = $data;
			}
			fclose($handle);
			return $spreadsheet_data;
		}
	}
	
	function validate_data($data){
		return true;
	}

	function remove_html_tags($data_to_publish){
		$data_to_publish[0]=(int)strip_tags($data_to_publish[0]);
		$data_to_publish[1]=(int)strip_tags($data_to_publish[1]);
		$data_to_publish[2]=(int)strip_tags($data_to_publish[2]);
		$data_to_publish[3]=(int)strip_tags($data_to_publish[3]);
		return true;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/device_specific.css">
	<link rel="stylesheet" href="css/common.css">
  	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>
		Progress report
	</title>
	<meta name="description" content="Progress report of sevasetu's citizen care subprogram">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<!-- Division 1-->
	<div class="container-fluid" style="background-color:#eceff1; margin-left: 0.5em;margin-right: 0.5em;" >
		<div class="row">
			<!-- Division 1.1 LOGO-->
			<div id="div1-1" class="col-xs-1" style="padding: 0px;margin-right: 1em;">
				<a href="http://sevasetu.org/" target="_blank">
					<img class="img-responsive" src="img/logo.jpg" alt="logo" height=100 width=75 style="position: relative;left:7%;margin-top:1em;">
				</a>
				<div id="div1-1_link" style="text-align: center;">
					<div>
						<h5><a class="nav-link" href="http://sevasetu.org/contribute-now/" target="_blank">Donate</a></h5>
					</div>
					<div>
						<h5><a class="nav-link" href="http://sevasetu.org/" target="_blank">About Us</a></h5>
					</div>
				</div>
			</div>
			<!-- Division 1.2 HEADER-->
			<div id="div1-2" class="col-xs-9" style="text-align:center;">
				<h1 style="position: relative ;margin-top: 1%;font-weight: bold;">Seva Setu</h1>
				<h2 style="position: relative ;margin-top: 1%;">Progress Report: Citizen Care</h2>
				<h2 style="position: relative ;margin-top: 1%;margin-bottom: 0.5%;">April - June 2017</h2>
			</div>
			<div id="div1-3" class="col-xs-1" >
				<br>
				<div><h4 class="centerify"><a class="nav-link" href="http://sevasetu.org/contribute-now/" target="_blank">Donate</a></h4></div>
				<div><h4 class="centerify"><a class="nav-link" href="http://sevasetu.org/" target="_blank">About Us</a></h4></div>
			</div>
		</div>
	</div>
	<!-- Division 2,3-->
	<div class="container-fluid" style="margin-left: 1em;margin-right: 1em;">
		<hr class="decMargin" id="hr1">
		<div class="row">
			<!-- Division 2-->
			<div class="col-sm-7 button-wrapper border" style="">
				<h1 id="title" class="decMargin" style="text-align: center;">Our target</h1>
				<br>
				<h4 id="target_text" class="centerify">Ensure every differently abled person in Rajapakar block has a disability certificate and receives her/his pension.</h4>
				<div id="tilt">
						<h2 class="centerify" style="color: green;">~~~</h2>
				</div>
				<!-- Progress bar-->
				<div id="progress-bar" class="progress" style="width:100%;height:4.4em;">
					
    				<div class="progress-bar progress-bar-striped active" id="progress-bar-bg" role="progressbar" aria-valuenow=<?php echo $data_to_publish[2]; ?> aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $data_to_publish[2]; ?>%;background-color:#5e35b1;height: 4.4em;">
    				<h2 style="color:#ffff00;top: 25%;position: relative;margin-top:0px;"><b id="completed"><?php echo $data_to_publish[2]; ?>% completed</b></h2>
    				</div>
  				</div>
  				<!-- Target details-->
  				<div style="position: relative;">
  					<h4>The utilization of pensions meant for the differently abled is less than 50% in most states. In Bihar specifically, <a href="http://www.disabilityaffairs.gov.in/upload/uploadfiles/files/disabilityinindia2011data.pdf"> 55% of the intended beneficiaries do not even possess disability certificates</a>, a pre-requisite to receiving their pensions. We hand-hold people in obtaining these certificates and pensions.</h4>
  				</div>
  				<br>
			</div>
			<!-- Division 3-->
			<div class="col-sm-5 div3" style="">
				<h1 style="text-align:center;" class="decMargin" id="areaofwork">Area of work</h1>
				<br>
				<br>
				<div class="row">
					<div class="col-sm-7">
						<img class="img-responsive" src="img/vaishali_resized.png" style="width: 100%">
					</div>
					<div class="col-sm-5" style="padding: 0.1em;">
						<h4 style="margin-top: 1.1em;"><b>Block:</b> Rajapakar</h4>
						<h4><b>District:</b> Vaishali</h4>
						<h4><b>State:</b> Bihar</h4>
						<h4><b>Population:</b> 3.4 L</h4>
						<h4><b>Area:</b> 2000 sq. km. </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Division 4-->
	<div class="container-fluid">
		<hr class="decMargin" id="hr2">
		<div class="row" style="padding: 0.1em;">
			<div class="col-xs-8" style="">
				<h4>Estimated number of differently abled citizens in Rajapakar </h4>
			</div>
			<div id="div4-12" class="col-xs-1 btn_no" style="background-color: #ba68c8;">
				<h4 style="color: white;"><b><?php echo $data_to_publish[0]; ?></b></h4>
			</div>
			<div id="div4-13" class="col-xs-3"></div>
		</div>
		<div class="row" style="padding: 0.1em;">
			<div class="col-xs-8" style="">
				<h4>Number of differently abled citizens enabled by Seva Setu </h4>
			</div>
			<div id="div4-22" class="col-xs-2 btn_no" style="background-color: #ba68c8;">
				<h4 style="color: white;"><b><?php echo $data_to_publish[1]; ?> and counting...</b></h4>
			</div>
			<div id="div4-23" class="col-xs-2"></div>
		</div>
		<div class="row" style="padding: 0.1em">
			<div class="col-xs-8" style="">
				<h4>Percentage (of the estimated people) supported by Seva Setu</h4>
			</div>
			<div id="div4-32" class="col-xs-1 btn_no" style="background-color: #ba68c8;">
				<h4 style="color: white;"><b><?php echo $data_to_publish[2]; ?>%</b></h4>
			</div>
			<div id="div4-33" class="col-xs-3"></div>
		</div>
		<div class="row" style="padding: 0.1em">
			<div class="col-xs-8" style="">
				<h4>Number of citizens whose pension applications have been submitted</h4>
			</div>
			<div id="div4-42" class="col-xs-1 btn_no" style="background-color: #ba68c8;">
				<h4 style="color: white;"><b><?php echo $data_to_publish[3]; ?></b></h4>
			</div>
			<div id="div4-43" class="col-xs-3"></div>
		</div>
	</div>
	<!-- Division 5-->
	<div class="container-fluid">
		<hr style="margin: 0.5%;">
		<h1 style="text-align:center;" class="decMargin" id="relatedlinks">Related Links</h1>
		<div class="row">

			<div class="col-sm-4 border" style="text-align: center;padding: 1em;">
				<h4 style="color: #00695c;">Our effort gets covered by a leading daily</h4>
				<a href="http://epaper.prabhatkhabar.com/c/18623553" target="_blank"><img src="img/prabhat_khabar_logo.png" style="height: 7em;"></a>
			</div>

			<div class="col-sm-4 border" style="text-align: center;padding: 1em;">
				<h4 style="color: #00695c;">Our crowd funding campaign</h4>
				<a href="https://www.ketto.org/sevasetu-citizen-care" target="_blank"><img src="img/ketto.png" style="height: 7em;"></a>
			</div>

			<div class="col-sm-4" style="text-align: center;padding: 1em;">
				<h4 style="color: #00695c;">Notes on our Citizen Care program</h4>
				<a href="http://sevasetu.org/category/citizen-care/" target="_blank"><img src="img/notes.png" style="height: 7em;"></a>
			</div>
			
		</div>
		<hr>
	</div>
	<!-- Division 6/footer-->
	<footer class="footer p-t-1">
        <div class="container">
                <nav class="navbar" style="background:transparent; color: black;">
                    	<div class="row">
                    		<div class="col-sm-6 h6"> <h1 style="color: whitesmoke;opacity: 0.6;margin-top: 0px;">Seva Setu</h1> </div>
                			<div class="col-sm-2 "> <a class="nav-item nav-link" href="http://sevasetu.org/" target="_blank"><h4 style="color: ghostwhite;"><u>About Us</u></h4></a></div>
                			<div class="col-sm-2 "> <a class="nav-item nav-link" href="http://sevasetu.org/"><h4 style="color: ghostwhite;"><u>Join Us</u></h4></a></div>
                			<div class="col-sm-2"> <a class="nav-item nav-link" href="http://sevasetu.org/contribute-now/" target="_blank"><h4 style="color: ghostwhite;"><u>Donate</u></h4></a></div>
                    	</div>
                    	<h6 style="color: silver;margin: 0px;">© 2017 sevasetu.org</h6>
                </nav>
        </div>
    </footer>

</body>
	<!-- For device specific changes -->
<script>
	$(document).ready(function(){
		var $window=$(window);
		console.log($('#progress-bar').css('top'));
		console.log($('#progress-bar-bg').css('top'));
		console.log($('body').offset());
		console.log($(document).scrollTop());
		$('#progress-bar-bg').css($('#progress-bar').offset());
		function checkWidth(){

			if ($window.width() <= 640) {
				$('#div1-3').removeClass('col-xs-1');
				$('#div1-3').remove();
	            $('#div1-1').removeClass('col-xs-1').addClass('col-xs-2');
	            $('#div4-12').removeClass('col-xs-1').addClass('col-xs-2');
	            $('#div4-13').removeClass('col-xs-3').addClass('col-xs-2');
	            $('#div4-22').removeClass('col-xs-2').addClass('col-xs-4');
	            $('#div4-23').removeClass('col-xs-2');
	            $('#div4-23').remove();
	            $('#div4-32').removeClass('col-xs-1').addClass('col-xs-2');
	            $('#div4-33').removeClass('col-xs-3').addClass('col-xs-2');
	            $('#div4-42').removeClass('col-xs-1').addClass('col-xs-2');
	            $('#div4-43').removeClass('col-xs-3').addClass('col-xs-2');
	            $('#title').removeClass('decMargin');
	            $('#hr1').removeClass('decMargin');
	            $('#areaofwork').removeClass('decMargin');
	            $('#relatedlinks').removeClass('decMargin');
	            $('#hr2').removeClass('decMargin');
	            $('#completed').css("font-size","small");
        	}
        	else{
        		$('#div1-1_link').remove();
        		$('#title').addClass('decMargin');
           		$('#hr1').addClass('decMargin');
            	$('#areaofwork').addClass('decMargin');
            	$('#tilt').remove();

        	};
        	
		}
		checkWidth();
		$(window).resize(checkWidth);
	});
</script>
</html>