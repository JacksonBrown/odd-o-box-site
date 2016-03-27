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
			font-size: 25px;
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
				<h1 class="header-info" style="margin-top: 10%; color: #fff;"><span id="wss"></span></h1>
				<script>wss_elem = document.getElementById("wss"); wssSlide();</script>
			</div>


			<div class="container-two">
				<div class="col-md-12">

					<div class="col-md-2">
						<p class="contestant">test</p>
					</div>

					<div class="col-md-2">
						<p class="contestant">test</p>
					</div>

					<div class="col-md-2">
						<p class="contestant">test</p>
					</div>

					<div class="col-md-2">
						<p class="contestant">test</p>
					</div>

					<div class="col-md-2">
						<p class="contestant">test</p>
					</div>

					<div class="col-md-2">
						<p class="contestant">test</p>
					</div>
				</div>
			</div>
			

			<a data-scroll class="btn btn-two" href="#winner" >Show The Winner</a>


		</div>

	</div>

	<!-- BEGIN UPPER BG -->
	<div class="upper-bg home home-fullscreen winner" id="winner" style="background: #fff;">
		<div class="container">
			<div class="header-info" style="">
				<h1 class="header-info" style="margin-top: 10%; color: #000;">ALLAHU AKBARRRR!</h1>
			</div>
		</div>
	</div>


	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script src="js/app.js"></script>
	
</body>
</html>
