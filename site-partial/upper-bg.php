	<!-- Set Custom JS -->
	<script type="text/javascript">
		var wss_i = 0;
		var wss_array = [
				"personal containment, auto-loading smoking apparatus.",
				"Automatically loads tobacco.",
				"Easy tobacco containment chamber."
				];
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
			setTimeout('wssNext()', 6000);
		}
	</script>

	<!-- Set Custom CSS -->
	<style type="text/css">
		#wss{
			opacity:0;
			-webkit-transition:opacity 1.0s linear 0s;
			transition:opacity 1.0s linear 0s;
		}
	</style>
	<!-- ENDING CUSTOM JS -->

	<!-- BEGIN UPPER BG -->
	<div class="upper-bg home home-fullscreen paral" id="home">
		<div class="mask"></div>
		<div class="col-md-12">
			<a href="" class="menu-toggle" id="nav-expander" style="color: #fff;"><i class="fa fa-shopping-cart"></i></a>
		</div>
		<!-- BEGIN UPPER BG LANDING HEADER -->
		<div class="container">
			<div class="header-info">
					<h1 class="landing-header" style="color: #fff; font-family: 'pacifico', cursive;"><!--<span id="wss"></span>-->Odd-O-<!--<span style="color: #1E6EB3">-->Box<!--</span>--></h1>
					<p style="font-size: 25px; font-family: 'Roboto', sans-serif; padding-bottom: 20px;"><span id="wss"></span></p>
					<script>wss_elem = document.getElementById("wss"); wssSlide();</script>
					<a data-scroll href="#giveaway" class="btn btn-primary" target="_blank">Shop Now</a>
			</div>
		</div>
		<!-- END UPPER BG LANDING HEADER -->

	</div>
	<!-- END UPPER BG -->

