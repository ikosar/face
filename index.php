<?php
error_reporting(E_ALL);

// namespace and autoloaders
use Ridvanbaluyos\Face\FaceDetection as FaceDetection;
require_once __DIR__ . '/vendor/autoload.php';

// let's use Justin Bieber's photo
$image = array(
	'url' => 'http://img2.timeinc.net/people/i/2014/database/140831/justin-bieber-300.jpg',
);

// detect face
$face = new FaceDetection($image);
$face->analyzeAll()->getFaces();