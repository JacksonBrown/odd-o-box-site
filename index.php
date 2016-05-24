<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SavedIn1080p | Home</title>

	<!-- Load fonts -->
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	

	<!-- Load jQuery -->
	<script src="js/jquery-1.11.2.min.js"></script>
	
	<!-- Set Title Logo -->
	<link rel="shortcut icon" href="css/img/diamond.png" />

	<!-- Set Custom JS -->
	<script type="text/javascript">
		var wss_i = 0;
		var wss_array = [
				"Please have patience, as this site us under construction! We will be finished soon.",
				"Hey, I'm a Youtuber who likes to make let's plays and commentaries!",
				"I also like talking to people on Omegle and recording it." ,
				"Giveaways are another thing I like to do; next one is at 1000 subs."];
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

</head>
<body>



<!-- FACEBOOK JS SDK -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- END FACEBOOK JS SDK -->



	
	<!-- BEGIN UPPER BG -->
	<div class="upper-bg home home-fullscreen paral" id="home">

		<div class="col-md-12">
			<a href="" class="menu-toggle" id="nav-expander" style=""><i class="fa fa-bars"></i></a>
		</div>
		<!-- Offsite navigation -->
		<nav class="menu" style="z-index: 1001;">
			<a href="#" class="close"><i class="fa fa-close"></i></a>
			<br />
			<h3>Site Map</h3>
			<ul class="nav">
				<li><a data-scroll href="#home">Home</a></li>
				<li><a data-scroll href="#gallery">Newest Videos</a></li>
				<li><a data-scroll href="#contact">Social Media</a></li>
				<li><a href="http://www.savedin1080p.com/forum-site/">Forums</a></li>
			</ul>
		</nav>

		<!-- BEGIN UPPER BG LANDING HEADER -->
		<div class="container">
			<div class="header-info">
					<h1 class="landing-header" style="color: #fff;"><!--<span id="wss"></span>-->Savedin<span style="color: #444">1080p</span></h1>
					<p style="font-size: 25px; font-family: 'Slabo 27px', sans-serif; padding-bottom: 20px;"><span id="wss"></span></p>
					<script>wss_elem = document.getElementById("wss"); wssSlide();</script>
					<a data-scroll href="#second-half" class="btn btn-primary" target="_blank">Newest Video</a>
			</div>
		</div>
		<!-- END UPPER BG LANDING HEADER -->

	</div>
	<!-- END UPPER BG -->
	
	<!-- BEGIN SECOND HALF -->
	
	<section id="second-half" class="upper-bg home home-fullscreen second-half">

		<div class="mask"></div>

		<div class="container">
			<div class="row">
				<div class="column">
					<div class="second-half-item">
						<div class="video-view">
							<iframe src="https://www.youtube.com/embed/videoseries?list=PLMGscQtuGnF4HV-pAk4351nhG4PY5gq_n" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- END SECOND HALF-->

	<!-- BEGIN GIVEAWAY -->
	<section id="giveaway" class="giveaway">
		
		<div class="container">

			<!-- GENERATE GIVEAWAY SLIDE -->
			<div class="col-md-6 slide-view">
				<div class="white-box">

					<a class="twitter-timeline" href="https://twitter.com/OOIAmSavedOO" data-widget-id="711026158012239872">Tweets by @OOIAmSavedOO</a>
            				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

				</div>
			</div>
			
			<div class="col-md-6 slide-view">
				<div class="white-box">

					<div class="fb-page" style="width: 100%;" data-href="https://www.facebook.com/Savedin1080p/?fref=ts" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Savedin1080p/?fref=ts"><a href="https://www.facebook.com/Savedin1080p/?fref=ts">Savedin1080p</a></blockquote></div></div>
				</div>
			</div>
			<!-- END GIVEAWAY SLIDE -->

		</div>
	</section>
	<!-- END GIVEAWAY -->

	<!-- BEGIN FOOTER -->
	<footer class="foot">
		<div class="container">
			<div class="row">

				<div class="container">
                                        <div class="col-md-3">
                                                <div class="black-box">
                                                        <a stlye="color: #fff;" href="http://savedin1080p.com/forum-site/" target="_blank">
                                                                <h2>Forums</h2>
                                                        </a>
                                                        <a class="box" href="http://savedin1080p.com/forum-site/" target="_blank"><i class="fa fa-forumbee"></i></a>
                                                </div>
                                        </div>

                                        <div class="col-md-3">
                                                <div class="black-box">
                                                        <a stlye="color: #fff;" href="http://twitter.com/OOIAmSavedOO" target="_blank">
                                                                <h2>Twitter</h2>
                                                        </a>
                                                        <a class="box" href="http://twitter.com/OOIAmSavedOO" target="_blank"><i class="fa fa-twitter"></i></a>
                                                </div>
                                        </div>

                                        <div class="col-md-3">
                                                <div class="black-box">
                                                        <a stlye="color: #fff;" href="https://www.youtube.com/user/00IAmSaved00" target="_blank">
                                                                <h2>YouTube</h2>
                                                        </a>
                                                        <a class="box" href="https://www.youtube.com/user/00IAmSaved00" target="_blank"><i class="fa fa-youtube"></i></a>
                                                </div>
                                        </div>

                                        <div class="col-md-3">
                                                <div class="black-box">
                                                        <a stlye="color: #fff;" href="https://www.facebook.com/savedin1080p" target="_blank">
                                                                <h2>Facebook</h2>
                                                        </a>
                                                        <a class="box" href="https://www.youtube.com/user/00IAmSaved00" target="_blank"><i class="fa fa-facebook"></i></a>
                                                </div>
                                        </div>
                                </div>


				<div class="col-md-8">
					<p style="padding: 40px; font-size: 14px;">&copy; Savedin1080p 2016 | Design by <a class="foot" href="http://www.ohhi.net23.net"  target="_blank">oh_hi</a></p>
				</div>

			</div>
		</div>
	</footer>
	<!-- END FOOTER -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>

</body>
</html>
