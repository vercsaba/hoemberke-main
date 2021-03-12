<?php
header('Content-type:image/png');
$s = 500;
$image = imagecreatetruecolor($s, $s);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagefilledellipse($image, $s/2, 425, 200, 200, $white);
imagefilledellipse($image, $s/2, 275, 160, 160, $white);
imagefilledellipse($image, $s/2, 150, 120, 120, $white);

imagefilledellipse($image, $s/2 +25, 150, 10, 10, $black);
imagefilledellipse($image, $s/2 -25, 150, 10, 10, $black);

imagefilledellipse($image, $s/2 +25, 180, 10, 10, $black);
imagefilledellipse($image, $s/2 +14, 187, 10, 10, $black);
imagefilledellipse($image, $s/2, 190, 10, 10, $black);
imagefilledellipse($image, $s/2 -14, 187, 10, 10, $black);
imagefilledellipse($image, $s/2 -25, 180, 10, 10, $black);

imagefilledellipse($image, $s/2, 240, 10, 10, $black);
imagefilledellipse($image, $s/2, 270, 10, 10, $black);
imagefilledellipse($image, $s/2, 300, 10, 10, $black);

imagepng($image);
imagedestroy($image);
?>