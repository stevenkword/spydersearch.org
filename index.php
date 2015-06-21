<html>
<head>
	<title>MR2 SpyderSearch - Toyota MR2 Spyder Search Engine</title>
	<meta name='description' content="A Community Search Engine for the Toyota MR2 Spyder. It searches Spyderchat Forums, Mr2roc Forums, and Spyder Magazine.">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png"/>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" /> 
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
	<script>
	$(document).ready(function() {
		//load the slideshow
		$('#slideshow').cycle({
			/*fx: 'shuffle',*/
			prev:   '#prev',
			next:   '#next',
			startingSlide: Math.floor(Math.random()*5),
			/*random:  1,*/
			delay:  500, 
			speed:  500, 
			timeout: 0
		}); 

		//display the slideshow
		$('.pics').show();
	});
	</script>
</head>
<body>
<div id="userbar">
	<ul>
		<li><a href='http://www.spydersearch.org/'>home</a></li>
		<li><a href='http://www.midshiprunabout.org/'>archives</a></li>
		<li><a href='http://www.mr2roc.org'>mr2roc</a></li>
		<li><a href='http://www.spyderchat.com'>spyderchat</a></li>
		<li><a href='http://www.mr2spyder.net/spyderweb/'>spyderweb</a></li>
	</ul>
</div><!--/#userbar-->
<div id='wrapper'>
	<div id='box'>
		<div id='slideshow' class="pics"> 
			<img src="img/default_bg.jpg" width="950" height="472" /> 
			<img src="img/bg_mr3.jpg" width="950" height="472" /> 
			<img src="img/bg_gt300.jpg" width="950" height="472" /> 
			<img src="img/bg_vagperformance.jpg" width="950" height="472" /> 
			<img src="img/bg_lbridges.jpg" width="950" height="472" />
		</div>	
		<div id='mainbar' style=''>
			<div id='logo'><img src='img/new_logo.png'></img></div>
			<div id="searchbar">
				<div id="cse-search-form" style="width: 100%;">Loading</div>
				<script src="http://www.google.com/jsapi" type="text/javascript"></script>
				<script type="text/javascript"> 
				  google.load('search', '1', {language : 'en', style : google.loader.themes.MINIMALIST});
				  google.setOnLoadCallback(function() {
					var customSearchControl = new google.search.CustomSearchControl('002530421024172728995:7recwureckm');
					customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
					var options = new google.search.DrawOptions();
					options.enableSearchboxOnly("http://www.spydersearch.org/results.php");
					customSearchControl.draw('cse-search-form', options);
				  }, true);
				</script>
			</div><!--/#searchbar-->
		</div><!--/#mainbar-->
		<div id="nav">
			<a id="prev" href="#"><img src='img/prev_button.png'/></a>
			<a id="next" href="#"><img src='img/next_button.png'/></a>
		</div>
	</div><!--/#box-->
	<div id='adspace'>
		<script type="text/javascript"><!--
		google_ad_client = "pub-4187229811122687";
		/* 468x15, created 3/4/08 */
		/*google_ad_slot = "3887639308";*/
		google_ad_slot = "9415662308";
		google_ad_width = 950;
		google_ad_height = 15;
		//-->
		</script>
		<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
	</div><!--/#adspace-->
</div><!--/#wrapper-->
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-3689671-1";
urchinTracker();
</script>
</body>
</html>
