<?php

$images = glob('./img/' . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];

shuffle($images);