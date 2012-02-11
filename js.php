<?php /* Javascript Include */
//header("Cache-Control: access plus 7 days");
ob_start("ob_gzhandler");
echo file_get_contents("./jquery.backstretch.js");
echo "\n\n";
echo file_get_contents("./jquery.hoverintent.js");
echo "\n\n";
echo file_get_contents("./jquery.cssAnimate.js");
echo "\n\n";
echo file_get_contents("./script.js");
ob_end_flush();
?>
