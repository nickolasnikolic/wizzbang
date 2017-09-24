<?php

require 'vendor/autoload.php';

use Elboletaire\Crawler\Crawler;

try {
	$crawler = new Crawler('http://www.underave.net', 3, true);
	echo json_encode($crawler->crawl());
} catch (Exception $e) {
	die($e->getMessage());
}