<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>I am SavedIn1080p</title>

	<!-- Load fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:900' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<!-- Load jQuery -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/unslider.js"></script>
	
	<!-- Set Title Logo -->
	<link rel="shortcut icon" href="css/img/diamond.png" />

	<!-- CSS Additions -->
	<style type="text/css">
		html {
			overflow: -moz-scrollbars-none; 
			 height: 100%;
		}

		.container {
  			display: block;
  			-webkit-box-sizing: border-box;
 			-moz-box-sizing: border-box;
  			box-sizing: border-box;
  			text-shadow: 0 0 5px #666;
  			-webkit-animation: glow-anim 12s infinite;
  			-moz-animation: glow-anim 12s infinite;
  			animation: glow-anim 12s infinite;
		}

		.container-two {
			margin-bottom: 5%;
			font-family: 'Roboto Slab', serif;
		}

		#wss{
			opacity: 0;
			-webkit-transition: opacity 1.0s linear 0s;
			transition: opacity 1.0s linear 0s;
		}

		@-webkit-keyframes glow-anim {
  			25% {
    				text-shadow: 0 0 25px #FF3E34;
    				color: #FF3E34;
  			}
  			50% {
    				text-shadow: 0 0 25px #60FF67;
    				color: #60FF67;
  			}
  			75% {
    				text-shadow: 0 0 25px #4C79FF;
    				color: #4C79FF;
  			}
		}
		@-moz-keyframes glow-anim {
  			25% {
    				text-shadow: 0 0 25px #FF3E34;
   	 			color: #FF3E34;
  			}
  			50% {
    				text-shadow: 0 0 25px #60FF67;
    				color: #60FF67;
  			}
  			75% {
    				text-shadow: 0 0 25px #4C79FF;
    				color: #4C79FF;
  			}
		}
		@keyframes glow-anim {
  			25% {
    				text-shadow: 0 0 25px #FF3E34;
    				color: #FF3E34;
  			}
  			50% {
    				text-shadow: 0 0 25px #60FF67;
    				color: #60FF67;
  			}
  			75% {
    				text-shadow: 0 0 25px #4C79FF;
   	 			color: #4C79FF;
  			}
		}

		.btn-two{
			background: none;
			border: 3px solid #fff;
			font-family: 'Montserrat', sans-serif;
			color: #fff;
		}

		.btn-two:hover{
			background: #fff;
			color: #000;
			transition: 0.6s;
		}

		.btn-two:visited{
			
		}

		.btn-three{
			background: none;
			border: 3px solid #000;
			color: #000;
			font-family: 'Montserrat', sans-serif;
		}

		.btn-three:hover{
			background: #000;
			color: #fff;
			transition: 0.6s;
			border-color: #000;
		}

		.upper-bg{
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.contestant{
			font-family: 'Montserrat', sans-serif;
			padding: 20px;
			font-size: 15px;
			-webkit-transition: opacity 1.0s linear 0s;
			transition: opacity 1.0s linear 0s;
		}

		::webkit-scrollbar{
			display: none;
		}

	</style>

	<!-- Custom JS -->
	<script type="text/javascript">
		$(function() {

			$("#slideshow > div:gt(0)").hide();

			setInterval(function() {
				$('#slideshow > div:first')
			    		.fadeOut(1000)
			    		.next()
			    		.fadeIn(1000)
			    		.end()
			    		.appendTo('#slideshow');
				},  5000);

		});

		var wss_i = 0;
		var wss_array = ["\"Username1\"","\"Username2\"" ,"\"Username3\"","\"Username4\""];
		var wss_elem;
		function wssNext(){
			wss_i++;
			wss_elem.style.opacity = 0;
			if(wss_i > (wss_array.length - 1)){
				wss_i = 0;
			}
			setTimeout('wssSlide()', 2000);
		}

		function wssSlide(){
			wss_elem.innerHTML = wss_array[wss_i];
			wss_elem.style.opacity = 1;
			setTimeout('wssNext()', 4000);
		}


	</script>

	<script src="contest.js"></script>

</head>
<body style="background: #333;">


	<!-- BEGIN UPPER BG -->
	<div class="upper-bg home home-fullscreen home" id="home" style="background: #000;">
		<!-- BEGIN UPPER BG LANDING HEADER -->
		<div class="container" style="overflow: hidden;">
			<div class="header-info" style="">
				<h1 class="header-info" style="margin-top: 10%; color: #fff;">Show The Participants!</h1>
				<a data-scroll class="btn btn-two" href="#partic" >Reveal</a>
			</div>
		</div>
		<!-- END UPPER BG LANDING HEADER -->
	</div>
	<!-- END UPPER BG -->

	<!-- BEGIN UPPER BG -->
	<div class="upper-bg home home-fullscreen partic" id="partic" style="background: #000;">
		<div class="container">
			<div class="header-info" style="">
				<h1 class="header-info" style="margin-top: 10%; color: #fff;">The Winner Is</h1>
				<script>wss_elem = document.getElementById("wss"); wssSlide();</script>
			</div>

			<button class="btn btn-two" onclick="fadeOut()">Show The Winner</button>

			<br />
			<br />
			<br />

			<!-- FIRST ROW -->
			<div class="container-two" id="frow">
				<div class="col-md-12" id="frow">

					<div class="col-md-2" id="cond">
						<p id="con" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond6">
						<p id="con6" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond4">
						<p id="con4" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond5">
						<p id="con5" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond2">
						<p id="con2" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond3">
						<p id="con3" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>
			
			<!-- SECOND ROW -->
			<div class="container-two" id="srow">
				<div class="col-md-12" id="srow">

					<div class="col-md-2" id="cond7">
						<p id="con7" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond9">
						<p id="con9" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond8">
						<p id="con8" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond10">
						<p id="con10" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond12">
						<p id="con12" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond11">
						<p id="con11" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>

			<!-- THIRD ROW -->
			<div class="container-two" id="throw">
				<div class="col-md-12" id="throw">

					<div class="col-md-2" id="cond14">
						<p id="con14" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond13">
						<p id="con13" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond17">
						<p id="con17" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond15">
						<p id="con15" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond18">
						<p id="con18" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond16">
						<p id="con16" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>


			<!-- FOURTH ROW -->
			<div class="container-two" id="ftrow">
				<div class="col-md-12" id="ftrow">

					<div class="col-md-2" id="cond20">
						<p id="con20" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond19">
						<p id="con19" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond22">
						<p id="con22" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond21">
						<p id="con21" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond24">
						<p id="con24" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond23">
						<p id="con23" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>

			<!-- FIFTH ROW -->
			<div class="container-two" id="ffrow">
				<div class="col-md-12" id="ffrow">

					<div class="col-md-2" id="cond26">
						<p id="con26" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond25">
						<p id="con25" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond28">
						<p id="con28" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond27">
						<p id="con27" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond30">
						<p id="con30" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond29">
						<p id="con29" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>

			<!-- SIXTH ROW -->
			<div class="container-two" id="sxrow">
				<div class="col-md-12" id="sxrow">

					<div class="col-md-2" id="cond32">
						<p id="con32" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond31">
						<p id="con31" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond34">
						<p id="con34" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond33">
						<p id="con33" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond36">
						<p id="con36" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond35">
						<p id="con35" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>


			<!-- SEVENTH ROW -->
			<div class="container-two" id="svtrow">
				<div class="col-md-12" id="svtrow">

					<div class="col-md-2" id="cond38">
						<p id="con38" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond37">
						<p id="con37" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond40">
						<p id="con40" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond39">
						<p id="con39" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond42">
						<p id="con42" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond41">
						<p id="con41" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>

			<!-- EIGTH ROW -->
			<div class="container-two" id="egrow">
				<div class="col-md-12" id="egrow">

					<div class="col-md-2" id="cond44">
						<p id="con44" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond43">
						<p id="con43" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond46">
						<p id="con46" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond45">
						<p id="con45" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond48">
						<p id="con48" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond47">
						<p id="con47" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>

			<!-- NINTH ROW -->
			<div class="container-two" id="nnrow">
				<div class="col-md-12" id="nnrow">

					<div class="col-md-2" id="cond50">
						<p id="con50" class="contestant">AllahuAkbar</p>
					</div>

					<div class="col-md-2" id="cond49">
						<p id="con49" class="contestant">Destructo22</p>
					</div>

					<div class="col-md-2" id="cond52">
						<p id="con52" class="contestant">pleasekillme1217</p>
					</div>

					<div class="col-md-2" id="cond51">
						<p id="con51" class="contestant">ayylmao696969</p>
					</div>

					<div class="col-md-2" id="cond54">
						<p id="con54" class="contestant">baruckobumu420</p>
					</div>

					<div class="col-md-2" id="cond53">
						<p id="con53" class="contestant">xx_snipehawkz_xx</p>
					</div>

				</div>
			</div>


		</div>

	</div>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script src="js/app.js"></script>
	
</body>
</html>
