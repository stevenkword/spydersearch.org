<?php
#results.php
include_once('./config/googleConfig.php');

$siteTitle = 'MR2 SpyderSearch';
$subSearch = 'Subtitle';
$searchSubject = 'Generic';
$pageTitle = "' " . $_GET['q'] . " '";
if($pageTitle!='')$htmlTitle = $siteTitle.' - '.$pageTitle;
else $htmlTitle = $siteTitle;
$htmlMeta = '<meta name="description" content="A Community Search Engine for the Toyota MR2 Spyder. It searches Spyderchat Forums, Mr2roc Forums, and Spyder Magazine.">';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE><?php echo $htmlTitle; ?></TITLE>
  <?php echo $htmlMeta; ?>
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png"/>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" /> 
  <style>
	iframe{ width: 100% !important;}
  </style>
 </HEAD>
<body bgcolor='#ffffff'>
<center>
<table border='0' cellspacing='0' cellpadding='0' width='100%'>
<tr>
	<td style='width: 210px;'><a href="http://www.spydersearch.org"><img alt="" src="http://www.spydersearch.org/img/logo.jpg" height='69' border='0'></a></td>
	<td style='width: 420px; padding-top: 15px; text-align: left;'>
		<form action="results.php" id="cse-search-box">
		<input type="hidden" name="cx" value="002530421024172728995:7recwureckm" />
	    <input type="hidden" name="cof" value="FORID:9" />
	    <input type="hidden" name="ie" value="UTF-8" />
	    <input type="text" name="q" size="35" />
	    <input type="submit" name="sa" value="Search" />
		</form>
	</td>
	<td style='text-align: center;'><?php googleContentWide();?></td>
</tr>
<tr>
	<td colspan='3'><div id="cse-search-results"></div></td>
</tr>
</tr>
<!--
<tr>
	<td colspan='3' style='text-align: center;'>
		<script type="text/javascript"><!--
		google_ad_client = "pub-4187229811122687";
		/* SpyderSearch - Results - Footer */
		google_ad_slot = "9046355753";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		<!--
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</td>
</tr>
-->
</tr>
		<tr>
			<td align='center' colspan='3'>
				<br /><font size='2'>A Search Engine for the <a href='http://www.toyota.com/'>Toyota</a> <a href='http://en.wikipedia.org/wiki/Toyota_MR2#Third_generation_.2F_ZZW30_.281999-2007.29'>MR2</a> <a href='http://en.wikipedia.org/wiki/Spyder'>Spyder</a> Community</font>
				<br /><font size='2'>&copy;2009 <a href='http://www.axiomgrove.com/'>AxiomGrove</a></font>
			</td>
		</tr>
</table>
</center>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>
<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 1000;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-3689671-1";
urchinTracker();
</script>
</body>
</HTML>
