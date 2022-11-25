<?php

$bgimagepath = require("./getImagePath.php"); // returns a string like "image.png"
$bgimagewidth = getimagesize($bgimagepath)[0];
$bgimageheight = getimagesize($bgimagepath)[1];
$bgimage = imagecreatefrompng($bgimagepath);
$text = require("./getEventText.php");

if ($text === "") {
	header("Content-type: image/png");
	imagepng($bgimage);
	imagedestroy($bgimage);
}
else {
	$finalimage = imagecreatetruecolor($bgimagewidth, $bgimageheight+100);
	$textimage = imagecreatetruecolor($bgimagewidth, 100);
	$font = "./Ubuntu-B.ttf";
	$bgcolor = imagecolorallocate($textimage, 32, 32, 32);
	$fontcolor = imagecolorallocate($textimage, 255, 255, 255);
	imagefill($textimage, 0, 0, $bgcolor);
	$textcolor = imagecolorallocate($textimage, 255, 255, 255);
	$textbox = imagettfbbox(70, 0, $font, $text);
	$textwidth = ($textbox[2] - $textbox[0]);
	$x_coord = ($bgimagewidth / 2) - ($textwidth / 2);
	imagettftext($textimage, 70, 0, $x_coord, 80, $fontcolor, $font, $text);
	imagecopy($finalimage,$bgimage,0,0,0,0, $bgimagewidth, $bgimageheight);
	imagecopy($finalimage,$textimage,0,$bgimageheight,0,0, $bgimagewidth, 100);
	header("Content-type: image/png");
	imagepng($finalimage);
	imagedestroy($finalimage);
}
?>
