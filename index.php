<?php
include( "classes/Crawler.php" );

$crawler = new MyCrawler();
$crawler->setURL("www.wikipedia.org");
$crawler->addContentTypeReceiveRule("#text/html#");

$crawler->go();
