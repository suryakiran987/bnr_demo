<?php
require("templates.inc.php");

?><HTML>
<HEAD>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58038449-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

  gtag('config', 'UA-58038449-2');
</script>

<!-- Third Party Stuff -->
<script src="/js/third_party/jquery.min.js"></script>
<script src="/js/third_party/bootstrap.min.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="/css/third_party/bootstrap.min.css">
<link rel="stylesheet" href="/css/third_party/bootstrap-theme.min.css">

<!-- Bootstrap Social -->
<link rel="stylesheet" href="/css/third_party/bootstrap-social.css">

<!-- Practico Stylesheet -->
<link rel="stylesheet" href="/css/global.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Font Awsmome -->
<script src="https://use.fontawesome.com/896c7d788c.js"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="April Jennifer Choi - Instructor/Performer">
<meta name="author" content="David Hinkle">
<title>April Jennifer Choi - Instructor/Performer</title>

<script src='https://www.google.com/recaptcha/api.js'></script>

<style>
.dl-horizontal {
	columns: auto 500px;
}

</style>
<!DOCTYPE html>
</HEAD>
<BODY>
<!-- Facebook video embed support code -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=313582172426075";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
$(document).ready(function() {
	$(".hover-spin").hover(
		function() { $(this).find('.fa').addClass('fa-pulse') },
		function() { $(this).find('.fa').removeClass('fa-pulse') }
		);
	});
</script>
<?php require('booking.dialog.inc.php'); ?>
<nav class="navbar navbar-inverse navbar-static-top bs-docs-nav">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">April Jennifer Choi</a>
    </div>
	<div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
        	<li><a href="/#Fire">Fire</a></li>
        	<li><a href="/#Flow">Flow</a></li>
        	<li><a href="/#Whips">Whips</a></li>
        	<li><a href="/#Cardistry">Cardistry</a></li>
        	<li><a href="/#Dance">Dance</a></li>
        	<li><a href="/#Modeling">Modeling</a></li>
		</ul>
		<a href="https://twitter.com/AprilJennChoi" class="btn btn-social-icon btn-twitter navbar-btn navbar-right">
			<span class="fa fa-twitter"></span>
		</a>
		<a href="https://www.instagram.com/withoutshade86/" class="btn btn-social-icon btn-instagram navbar-btn navbar-right">
			<span class="fa fa-instagram"></span>
		</a>
		<a href="https://www.facebook.com/AprilJennChoi/" class="btn btn-social-icon btn-twitter navbar-btn navbar-right">
			<span class="fa fa-facebook"></span>
		</a>
		<a href="https://www.youtube.com/user/WithoutShade86" class="btn btn-social-icon btn-pinterest navbar-btn navbar-right">
			<span class="fa fa-youtube"></span>
		</a>
		<a href="#" data-toggle="modal" data-target="#booking-modal" class="btn btn-social btn-yahoo navbar-btn navbar-right">
			<span class="fa fa-envelope"></span>Book Now!
		</a>
		
    </div><!--/.navbar-collapse -->
  </div>
</nav>

<div class="jumbotron">
		<div id="main-carousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#main-carousel" data-slide-to="1"></li>
			<li data-target="#main-carousel" data-slide-to="2"></li>
			<li data-target="#main-carousel" data-slide-to="3"></li>
			<li data-target="#main-carousel" data-slide-to="4"></li>
			<li data-target="#main-carousel" data-slide-to="5"></li>
			<li data-target="#main-carousel" data-slide-to="6"></li>
			<li data-target="#main-carousel" data-slide-to="7"></li>
			<li data-target="#main-carousel" data-slide-to="8"></li>
			<li data-target="#main-carousel" data-slide-to="9"></li>
			<li data-target="#main-carousel" data-slide-to="10"></li>
			<li data-target="#main-carousel" data-slide-to="11"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="images/whip.jpg">
			</div>

			<div class="item">
			  <img src="images/today_show.jpg">
			</div>

			<div class="item">
			  <img src="images/april_beth.jpg">
			</div>
			
			<div class="item">
			  <img src="images/sweden.jpg">
			</div>

			<!--
			<div class="item">
			  <img src="images/dragonstaff.jpg">
			</div>
			-->
			
			<div class="item">
			  <img src="images/slackline.jpg">
			</div>

			<!--	
			<div class="item">
			  <img src="images/eggs.jpg">
			</div>
			-->

			<div class="item">
			  <img src="images/model.jpg">
			</div>

			<div class="item">
			  <img src="images/fire.jpg">
			</div>
			
			<div class="item">
			  <img src="images/records.jpg">
			</div>

			<!--
			<div class="item">
			  <img src="images/odachi.jpg">
			</div>
			-->
			
			<div class="item">
			  <img src="images/april_beth2.jpg">
			</div>

			<div class="item">
			  <img src="images/vapor.jpg">
			</div>

			<div class="item">
			  <img src="images/fire_breathing.jpg">
			</div>
			
			<div class="item">
			  <img src="images/cards.jpg">
			</div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
</div> <!-- Jumbotron -->

<div class="container">
	<!-- Intro -->
	<div class="row">
		<div class="col-md-12">
			<?php template_panel_start("Intro", "<strong>April Jennifer Choi</strong> - Instructor/Performer");?>
			April has studied dance, flow, fire and movement arts since she was a young child.  Inspired by martial arts, dancers and magicians, she lives her life as a never ending quest to
			become a stronger, better version of herself. She has an M.S. in Computational Fluid Dynamics, and currently works as an Analytical Engineer in the Peoria,
Illinois when she's not traveling the world teaching and performing on television, at conventions and festivals.
			<?php template_panel_end();?>
		</div> <!-- col-md-12 -->
	</div> <!-- row -->

	<div class="row"> <!-- Fire/Flow/Whips/Dance -->
		
		<!-- Whips -->
		<div class="col-md-6">
			<?php template_panel_start("Whips");?>
				<?php template_youtube("8gaM-wL_mCI");?>
				<?php template_skill("Wip Cracking", 10, 10);?>
			<?php template_panel_end();?>
		</div> <!-- col-md-3-->

		<!-- Fire -->
		<div class="col-md-6">
			<?php template_panel_start("Fire");?>
				<?php template_youtube("dQrph0IbKGw");?>
				<?php template_skill("Fire Eating", 10, 10);?>
				<?php template_skill("Wip Cracking", 10, 10);?>
				<?php template_skill("Contact Staff", 8, 10);?>
				<?php template_skill("Dragon Staff", 8, 10);?>
			<?php template_panel_end();?>
		</div> <!-- col-md-3-->

	</div>

	<div class="row">
		<!-- Flow -->
		<div class="col-md-6">
			<?php template_panel_start("Flow");?>
				<?php template_youtube("RHqAVPEj7Vs");?>
				<?php template_skill("Contact Staff", 8, 10);?>
				<?php template_skill("Dragon Staff", 8, 10);?>
			<?php template_panel_end();?>
		</div> <!-- col-md-3-->
		
		<!-- Cardistry -->
		<div class="col-md-6">
			<?php template_panel_start("Cardistry");?>
				<?php template_youtube("Pi74VsQiCP4");?>
				<?php template_skill("Card Manipulation", 8, 10);?>
			<?php template_panel_end();?>
		</div> <!-- col-md-3-->
	</div> <!-- row -->

	<div class="row">
		<!-- Dance -->
		<div class="col-md-12">
			<?php template_panel_start("Dance");?>
				<?php template_skill("Swing", 9, 10);?>
				<?php template_skill("Blues", 9, 10);?>
				<?php template_skill("Latin", 9, 10);?>
				<?php template_skill("Tango", 9, 10);?>
				<?php template_skill("Jazz", 7, 10);?>
				<?php template_skill("Hip-Hop", 7, 10);?>
				<?php template_skill("Burlesque", 7, 10);?>
			<?php template_panel_end();?>
		</div> <!-- col-md-3-->
	</div> <!-- row -->

	<!-- Modeling -->
	<div class="row">
		<div class="col-md-12">
			<?php template_panel_start("Modeling");?>
				<h3 align=center style="margin-top:5px; margin-bottom: 20px">
					<span class="label label-primary">Black Hair</span>
					<span class="label label-primary">Brown Eyes</span>
					<span class="label label-primary">Height 5'7"</span>
					<span class="label label-primary">Weight 114</span>
					<span class="label label-primary">Bust 36</span>
					<span class="label label-primary">Waist 26</span>
					<span class="label label-primary">Hips 34</span>
					<span class="label label-primary">Shoe 7.5</span>
				</h3>
				<p>An accomplished photographer in her own right, she knows exactly what you need from a model.  She prides herself in being profesional and competent.
				Her extensive experience photographing fire, in particular, can be a valuable asset if that's what you're shooting.
			<?php template_panel_end();?>
		</div> <!-- col-md-12 -->
	</div> <!-- row -->

	<div class="row">
		<div class="col-md-12">
			<?php template_panel_start("performance_highlights", "Performance Highlights");?>
				<dl class="dl-horizontal">
					<dt>New York City, NY</dt>
					<dd>The Today Show</dd>

					<dt>Los Angeles, CA</dt>
					<dd>The Gong Show</dd>

					<dt>New York City, NY</dt>
					<dd>The Daily Glow</dd>

					<dt>Toronto, ON</dt>
					<dd>Breakfast Television</dd>

					<dt>Toronto, ON</dt>
					<dd>City TV</dd>

					<dt>New York City, NY</dt>
					<dd>Huffington Post Live<dd>

					<dt>Global News</dt>
					<dd>The Morning Show</dd>

					<dt>Amsterdam, NL</dt>
					<dd>Wedden Dat Ik Het Kan!</dd>

					<dt>Los Angeles, CA</dt>
					<dd>The Late, Late Show</dd>

					<dt>Indianapolis, IN</dt>
					<dd>Super Bowl Village</dd>

					<dt>Lake Worth, FL</dt>
					<dd>Florida Flow Fest<dd>
					
					<dt>College Corner, OH</dt>
					<dd>Kinetic Fire Festival</dd>
				   
					<dt>Peoria, IL</dt>
					<dd>Red, White and Boom</dd>
					
					<dt>Fest Berea, KY</dt>
					<dd>Play Think Movement</dd>

					<dt>Chillicothe, IL</dt>
					<dd>Summer Camp Music Fest</dd>

					<dt>Ashford, CT</dt>
					<dd>Wildfire Retreat</dd>

					<dt>Vienna, IL</dt>
					<dd>Southern Illinois Flow Fest</dd>

					<dt>Harrodsburg, KY</dt>
					<dd>Flow Camp</dd>
					
					<dt>Manteno, IL</dt>
					<dd>Shoe Fest</dd>
					
					<dt>Muncie, IN</dt>
					<dd>Muncie Gras</dd>
					
					<dt>Bloomington, IN</dt>
					<dd>Flow Motion</dd>
					
					<dt>St Louis, MO</dt>
					<dd>Nevermore Jazz Fest</dd>
					
					<dt>Des Moines, IA</dt>
					<dd>Heartland Swing Festival</dd>
					
					<dt>Omaha, NE</dt>
					<dd>Cowtown Swing Fest</dd>
					
					<dt>Iowa City, IA</dt>
					<dd>Hawkeye Swing Festival</dd>
					
					<dt>Chicago, IL</dt>
					<dd>Anime Central</dd>
					
					<dt>Minneapolis, MN</dt>
					<dd>Meta Con</dd>
					
					<dt>Chicago, IL</dt>
					<dd>Anime Midwest</dd>

					<dt>Des Moines, IA</dt>
					<dd>515 Music Fest</dd>
					
					<dt>Cedar Rapids, IA</dt>
					<dd>319 Music Fest</dd>

				</dl>
			<?php template_panel_end();?>
		</div> <!-- col -->

		<div class="col-md-12">
			<?php template_panel_start("world_records", "World Records");?>
				<dl class="dl-horizontal">
					<dt>2017</dt>
					<dd>Fastest Time to Hit 10 Targets with a Whip</dd>
					
					<dt>2017</dt>
					<dd>Most Newspapers Cut by a Whip in 1 Minute</dd>
					
					<dt>2017</dt>
					<dd>World's Loudest Whip Crack</dd>

					<dt>2016</dt>
					<dd>Most Eggs Broken with a Whip in 30 Seconds</dd>

					<dt>2016</dt>
					<dd>Most Jenga Blocks Removed with a Whip</dd>

					<dt>2016</dt>
					<dd>Most Stock Whip Cracks on a Slackline</dd>

					<dt>2015</dt>
					<dd>World's Longest Whip Cracked</dd>

					<dt>2015</dt>
					<dd>World's Longest Hand Braided Whip</dd>

					<dt>2014</dt>
					<dd>World's Longest Fire Whip</dd>

					<dt>2014</dt>
					<dd>World's Largest Dragon Staff</dd>

				</dl>
			<?php template_panel_end();?>
		</div> <!-- col -->
	
	<!-- Whips -->
	<div class="col-md-12">
		<?php template_panel_start("Favorite Videos/Media Appearances");?>
			<div class="row">
				<div class="col-md-6">
					<?php template_youtube("67QfIEEJmsU");?> <!-- The Late Late Show -->
					<?php template_html5("Wedden Dat Ik Het Kan - Whip Jenga 720.mp4");?>
					<?php template_youtube("9J_u_m5XvdA");?>
					
					
					<?php template_youtube("UMgET6gEu7c");?> <!-- Fire Whip Jenga -->

					<?php template_facebook("https://www.facebook.com/littlethingscom/videos/920764514799588/");?> <!-- Daily Glow -->

					<!-- Today Show EMbed -->
					<div style="position:relative; padding-bottom:63%; padding-bottom:-webkit-calc(56.25% + 50px); padding-bottom:calc(56.25% + 50px); height: 0;">    <iframe style="position:absolute; width: 100%; height: 100%;"    src="https://www.today.com/offsite/watch-this-guinness-challenger-remove-jenga-blocks-with-her-whip-1041365059790" scrolling="no" frameborder="0"></iframe>  </div>

				</div>

				<div class="col-md-6">
					<?php template_youtube("XZlHaZBith8");?> <!-- CityNews -->
					<?php template_youtube("UDD2vZNUOrU");?>
					<?php template_youtube("pbKmckSRUkE");?>
					<?php template_youtube("OrM9HdW1sl4");?>
					<?php template_youtube("NLchu1PYjIA");?> <!-- Lighter Trick -->
				</div>
			</div>
		<?php template_panel_end();?>
	</div> <!-- col-md-3-->

	</div> <!-- End of highlights -->
		

</div> <!-- container -->
</BODY>
</HTML>
