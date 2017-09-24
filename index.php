<?php

require './vendor/autoload.php';

use PhpSpider\Spider\Spider;

$spider = new Spider();
$spider->crawl("http://wikipedia.org");