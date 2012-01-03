<?php
/*
Template Name:  KDE4Classic
Description:    A KDE like theme that use css3 compatibile with FF,Chrom*
Version:        1
License:        GPL
Author:         Mte90
Requirements:   PHP 5.2.x and higher
template_guid   8951b9a9-7ac5-4cef-82a1-904f390b1dbc
*/


// include class.secure.php to protect this file and the whole CMS!
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

$template_directory     = 'KDE4Classic';
$template_name          = 'KDE4Classic';
$template_function	= 'template';
$template_version       = '1.0';
$template_platform      = '1.0';
$template_author        = 'wwww.mte90.net';
$template_license       = 'GPL';
$template_license_terms = 'you have to keep the frontend-backlink to mte90.net untouched';
$template_guid          = '8951b9a9-7ac5-4cef-82a1-904f390b1dbc';
$template_description   = 'This free template is released under a GPL license have fun with it :) ';
$block[1]='main-content';
?>