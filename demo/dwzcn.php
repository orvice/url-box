<?php
/**
 * This is a demo
 * User: orvice
 * last update: 14-9-11
 */

//Load func
include_once '../class/dwzcn.class.php';
$demo = new dwzcn();
$url = "http://url.com";
$bk = $demo->srt($url);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
