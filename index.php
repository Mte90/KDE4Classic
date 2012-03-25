<?php

/**
 *  @template       KDE4Classic
 *  @version        see info.php of this template
 *  @author         Mte90
 *  @copyright      2010-2012 Mte90.net
 *  @license        GPL
 *  @license terms  see info.php of this template
 *  @platform       see info.php of this template
 *  @requirements   PHP 5.2.x and higher
 */


if (defined('WB_PATH')) {
	include(WB_PATH.'/framework/class.secure.php');
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
	include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php');
} else {
	$subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));	$dir = $_SERVER['DOCUMENT_ROOT'];
	$inc = false;
	foreach ($subs as $sub) {
		if (empty($sub)) continue; $dir .= '/'.$sub;
		if (file_exists($dir.'/framework/class.secure.php')) {
			include($dir.'/framework/class.secure.php'); $inc = true;	break;
		}
	}
	if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']));
}
// end include class.secure.php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php simplepagehead();?>
	<meta name="author" content="http://www.mte90.net" />
	<link rel="icon" href="<?php echo TEMPLATE_DIR; ?>/images/favicon.png" type="image/png" />
	<script src="<?php echo WB_URL; ?>/modules/lib_jquery/jquery-core/jquery-core.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo TEMPLATE_DIR; ?>/js.php"></script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4eef4ee94ca647e4"></script>
	<link rel="alternate" type="application/rss+xml" title="Mte90.Net" hreflang="it" href="<?php echo WB_URL; ?>/modules/news/rss.php?page_id=2" />
	<?php
	/**
	 *	Automatically include optional WB module files (frontend.css, frontend.js)
	 *	Try to use the new build in method of the wb-object.
	 */
	if ( method_exists( $wb, "register_frontend_modfiles" ) ) {

		echo $wb->register_frontend_modfiles();

	} else {
		/**
		 *	Try to use the _old_ function call.
		 */
		if ( function_exists( 'register_frontend_modfiles' ) ) {
			register_frontend_modfiles('css');
			register_frontend_modfiles('js');
		}
	}
	?>
	<link href="<?php echo TEMPLATE_DIR; ?>/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Play|Iceland' rel='stylesheet' type='text/css'/>
	<!--[if IE]>
	<link href="<?php echo TEMPLATE_DIR; ?>/ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-27938703-1']);
		_gaq.push(['_trackPageview']);
		(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
	</script>
</head>

<body>
<div class="page">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
	<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
	</div>
	<!-- AddThis Button END -->
	<div class="editpage">[[editthispage]]</div>
	<div class="header-">
		<div id="header"><div class="logos">
			<div class="head_link"><a href="<?php echo WB_URL; ?>"><? page_title('', '[WEBSITE_TITLE]'); ?></a></div>
			<div class="description"><?php page_header(); ?></div>
		</div></div>
	</div>
	<div class="wrapper">
		<div class="content">
			<div class="post">
				<?php page_content(1); ?>
			</div>
		</div>

		<div class="sidebar">
			<div class="sidebar-box">
				<div class="search">
					<form class="searchform" action="<?php echo WB_URL; ?>/search/index.php" method="get">
						<input type="hidden" name="referrer" value="<?php echo defined('REFERRER_ID') ? REFERRER_ID : PAGE_ID; ?>" />
						<div><input type="text" value="" name="string" id="s" style="width:180px;"/>
						<input type="image" src="<?php echo TEMPLATE_DIR; ?>/images/search.png" alt="Search" title="Search" name="wb_search" align="top" class="searchsubmit" />
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="sidebar">
			<div class="sidebar-box">
				<div class="navigation">
				<div class="link"><a class="opendesktop" href="http://opendesktop.org/usermanager/search.php?username=Mte90" title="OpenDesktop Profile"></a>
				<br/><a class="github" href="https://github.com/Mte90" title="Github Profile"></a>
				<br/><a class="rss" href="<?php echo WB_URL; ?>/modules/news/rss.php?page_id=2" title="RSS Feed"></a>
				<br/><a class="feed" href="http://iwinuxfeed.altervista.org/aggregatore/"><img src="http://iwinuxfeed.altervista.org/_altervista_ht/iwinux-feed.png" alt="iwinuxfeed.altervista.org"></a></div>
					<div id="menu">
						<?php show_menu2(0, SM2_ROOT, SM2_ROOT+1,SM2_ALL); ?>
					</div>
				</div>
				<?php page_content(2); ?>

			</div>
		</div>

		<div class="sidebar">
			<div class="sidebar-box font">
				<div class="konversation"></div><span class="sidlink">Mte90</span><br/>
				freenode.org: #DeliriNotturni, #kde-italia
				<div class="twitter"></div><a href="http://twitter.com/mte90net" class="sidlink">@Mte90.Net</a><br/>
				<div id="tweet"></div>
			</div>
		</div>

		<div class="footer">
			<div class="footer_left"><?php page_footer(); ?> | Designed by <a href="http://www.mte90.net">Mte90</a> based on a template by <a href="http://csslayer.tk"> CS Slayer</a></div>
			<div class="footer_right"> <a href="<?php echo WB_URL; ?>/sitemap.php">Sitemap</a> | Powered by <a href="http://lepton-cms.org/"> Lepton</a></div>
		</div>
	</div>
</div>
</body>
</html>