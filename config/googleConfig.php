<?php
#googleInc.php
function googleForm(){
	echo '	<form action="results.php" id="searchbox_009810847490447149875:dztzbfz4gya">
	  <input type="hidden" name="cx" value="009810847490447149875:dztzbfz4gya" />
	  <input type="hidden" name="cof" value="FORID:9" />';
}
function googleLinks(){
	echo '<script type="text/javascript"><!--
				google_ad_client = "pub-4187229811122687";
				/* 468x15, created 4/14/08 */
				google_ad_slot = "9465824693";
				google_ad_width = 468;
				google_ad_height = 15;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
			</script>';
	echo '<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>';
}
function googleContent(){
	echo '<script type="text/javascript"><!--
		 google_ad_client = "pub-4187229811122687";
		 /* 234x60, created 3/17/08 */
		 google_ad_slot = "8357804733";
		 google_ad_width = 234;
		 google_ad_height = 60;
		 //-->
		 </script>';
	echo '<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>';
}

function googleContentWide(){
	echo '<script type="text/javascript"><!--
		 google_ad_client = "pub-4187229811122687";
		 /* 468x60, created 4/18/09 */
		 google_ad_slot = "0729624568";
		 google_ad_width = 468;
		 google_ad_height = 60;
		 //--></script>';
	echo '<script type="text/javascript"
		 src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		 </script>';
}


function googleAnalytics(){

}
function googleResults(){
	echo '<div id="results_009810847490447149875:dztzbfz4gya" style="width: 960px;"></div>';
	echo '<script type="text/javascript">
		  var googleSearchIframeName = "results_009810847490447149875:dztzbfz4gya";
		  var googleSearchFormName = "searchbox_009810847490447149875:dztzbfz4gya";
		  var googleSearchFrameWidth = 900;
		  var googleSearchFrameborder = 0;
		  var googleSearchDomain = "www.google.com";
		  var googleSearchPath = "/cse";
		</script>';
	echo '<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>';
}
function googleInputLogo(){
	echo '<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_009810847490447149875%3Adztzbfz4gya&amp;lang=en"></script>';
}
?>