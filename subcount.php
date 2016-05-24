	<link href='//fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="assets/css/odometer-theme.css" />
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/odometer.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<div id="cover">
	</div>
	<div id="main" class="top">
		<div class="im-img" onclick="toggleImmersive()">
		</div>
		<span id="username" style="display: none;">Loading..</span>
		<br>
		<div class="col-md-12">
		<i class="fa fa-youtube" style="padding: 10px; font-size: 60px; color: #333;"></i><h2 class="count_yt" style="font-size: 60px; margin-right: 20px; color: #333;"></h2>
		<h2 class="count_yt" style="display: none;">...</h2>
		</div>

		<div id="col-md-6" style="display: none;">
		<i class="fa fa-play" style="padding: 10px; font-size: 60px; display: none;"></i><h2 class="count_view normalize" style="font-size: 60px;">...</h2><br>
		</div>
		<span class="milestones" id="milestoneBox" style="display: none;">
			<br>You are just <h2 class="milestone_away">...</h2>	subscribers away from <h2 class="milestone_target">..wait..</h2>!
		</span>
	</div>
	<div class="" id="main" style="display: none;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- YouTube Realtime 1 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-3188055178160882"
		     data-ad-slot="4767099859"
		     data-ad-format="auto"></ins>
		<section class="ac-container" style="display: none;">
			<div>
				<input id="ac-1" name="accordion-1" type="radio" class="accordion"/>
				<label for="ac-1">Settings</label>
				<article class="ac-settings">
					<div class="inner">
						These settings are saved in your browser and are retained even if you navigate away from this page and come back later.<br><br>
						<div class="dark-theme setting">
							<span>Dark Theme:</span>
							<div class="onoffswitch">
								<input type="checkbox" name="darkTheme" class="onoffswitch-checkbox" id="darkTheme" onchange="toggleDark()" />
								<label class="onoffswitch-label" for="darkTheme">On</label>
							</div>
							<br><br>
							<p>
								Dark Theme eases the colors for continuous viewing in dark environments, but it's probably not the most beautiful thing you'll see today.
							</p>
						</div>
						<div class="milestone setting">
							<span>Milestones:</span>
							<div class="onoffswitch">
								<input type="checkbox" name="milestone" class="onoffswitch-checkbox" id="milestone" onchange="toggleMilestones()" />
								<label class="onoffswitch-label" for="milestone">On</label>
							</div>
							<br><br>
							<p>
								Milestones automatically calculate the next milestone and tells you the required number of subscribers to hit that.
							</p>
						</div>
						<div class="immersive setting">
							<span>Immersive Mode:</span>
							<div class="onoffswitch">
								<input type="checkbox" name="immersive" class="onoffswitch-checkbox" id="immersive" onchange="toggleImmersive()" />
								<label class="onoffswitch-label" for="immersive">On</label>
							</div>
							<span class='isbeta'>beta</span>
							<br><br>
							<p>
								Immersive Mode lets you concentrate right on the counter when you are all set with everything else! Dark Theme recommended in dark environments.
							</p>
						</div>
					</div>
				</article>
			</div>
			<div style="display: none;">
				<input id="ac-3" name="accordion-1" type="radio"  class="accordion"/>
				<label for="ac-3">Share!</label>
				<article class="ac-share">
					<div class="inner">
						<p>
							You can share the live subscriber counts for any channel on YouTube by sharing the following URL. You can also bookmark (Ctrl/Cmd + D) the current URL to come back anytime!<br><br>
							<input type="text" name="url" value="..wait.." id="shareURL" onclick="this.select()" readonly></input>
							<br><br>
							<button type="button" id="shareBtn" class="facebook" onclick="update.share('fb');">Share on Facebook!</button><br>
							<button type="button" id="shareBtn" class="twitter" onclick="update.share('twtr');">Share on Twitter!</button>
						</p>
					</div>
				</article>
			</div>
			<div>
				<input id="ac-4" name="accordion-1" type="radio"  class="accordion"/>
				<label for="ac-4">Embed on your website!</label>
				<article class="ac-embed">
					<div class="inner">
						<p>
							You can embed the live subscriber counts for any channel on YouTube by copying the following embed code in your HTML.<br><br>
							<textarea name="embed" value="..wait.." id="embedCode" onclick="this.select()" readonly></textarea><br><br>
							This counter works exactly the same way as this website, and updates the subscriber count in realtime. Here's how it looks:<br>
							<div class="embedImg">
								<img src="res/Embed.png" alt="Embeds" />
							</div>
						</p>
					</div>
				</article>
			</div>
			<div>
				<input id="ac-5" name="accordion-1" type="radio"  class="accordion"/>
				<label for="ac-5">Everything Else</label>
				<article class="ac-else">
					<div class="inner">
						<p>
							You can find more information about the project on <a href="https://github.com/akshatmittal/youtube-realtime/blob/gh-pages/README.md" target="_blank">GitHub</a> including license and contributors. You can get in touch with me over <a href="https://twitter.com/iakshatmittal" target="_blank">Twitter</a> or <a href="mailto:ytlive@akshatmittal.com" target="_blank">email</a>, if you prefer. Do let me know if you have any feedback or ideas for this project!
						</p>
						<p>
							I've been seeing a lot of copies of this project on the internet, please consider adding an attribution if you are planning to deploy this project on your website. If you are a YouTuber, consider using a direct link for your channel instead of creating a new clone, that'll save you from a lot of hassle. Thanks!
						</p>
					</div>
				</article>
			</div>
		</section>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- YouTube Realtime 2 -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-3188055178160882"
		     data-ad-slot="9771399854"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	<div id="main" style="display: none;">
		<div class="fb-like" data-href="https://akshatmittal.com/youtube-realtime/" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div> <div class="fb-follow" data-href="https://www.facebook.com/itsreallyakshat" data-colorscheme="light" data-layout="button" data-show-faces="false"></div> <div class="g-plusone" data-size="medium" data-annotation="none"></div> <a href="https://twitter.com/iakshatmittal" class="twitter-follow-button" data-show-count="false" data-size="medium">Follow @iakshatmittal</a> <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Realtime%20%40YouTube%20Subscriber%20Count%20by%20%40iakshatmittal!" data-count="none" data-size="medium">Tweet</a>
		<br><br>
		<small>&copy; <a href="https://akshatmittal.com/" target="_blank">Akshat Mittal</a>. Reproduction without permission is strictly forbidden.</small>
	</div>
