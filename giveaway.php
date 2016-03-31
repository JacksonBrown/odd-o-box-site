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

		function fadeOut(){
			document.getElementById("con").style.opacity = 0;
			setTimeout('fadeOut2()', 2000);
		}

		function fadeOut2(){
			document.getElementById("con2").style.opacity = 0;
			var del = document.getElementById("cond");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut3()', 2000);
		}

		function fadeOut3(){
			document.getElementById("con3").style.opacity = 0;
			var del = document.getElementById("cond2");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut4()', 2000);
		}

		function fadeOut4(){
			document.getElementById("con4").style.opacity = 0;
			var del = document.getElementById("cond3");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut5()', 2000);
		}

		function fadeOut5(){
			document.getElementById("con5").style.opacity = 0;
			var del = document.getElementById("cond4");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut6()', 2000);
		}
		function fadeOut6(){
			document.getElementById("con6").style.opacity = 0;
			var del = document.getElementById("cond5");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut7()', 2000);
		}

		function fadeOut7(){
			if (document.getElementById("frow") === ""){
				frow_elem = document.getElementById("frow");
				del.parentNode.removeChild(frow_elem);
			}
			var del = document.getElementById("cond6");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut8()', 2000);
		}
		function fadeOut8(){
			document.getElementById("con8").style.opacity = 0;
			var del = document.getElementById("cond7");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut9()', 2000);
		}
		function fadeOut9(){
			document.getElementById("con9").style.opacity = 0;
			var del = document.getElementById("cond8");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut10()', 2000);
		}
		function fadeOut10(){
			document.getElementById("con10").style.opacity = 0;
			var del = document.getElementById("cond9");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut11()', 2000);
		}
		function fadeOut11(){
			document.getElementById("con11").style.opacity = 0;
			var del = document.getElementById("cond10");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut12()', 2000);
		}
		function fadeOut12(){
			document.getElementById("con12").style.opacity = 0;
			var del = document.getElementById("cond11");
			del.parentNode.removeChild(del);
			setTimeout('fadeOut7()', 2000);
		}

	</script>

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
			<div class="container-two">
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
			<div class="container-two">
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
			<div class="container-two">
				<div class="col-md-12" id="throw">

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




		</div>

	</div>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script src="js/app.js"></script>
	
</body>
</html>
