<?php

header('Content-Type: image/jpeg');

$file = 'wallpaper.jpg';

$new_widht = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_widht, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_widht, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);