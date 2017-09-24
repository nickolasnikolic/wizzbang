<?php
include("classes/PHPCrawl_083/PHPCrawler.class.php");

$crawler = new MyCrawler();
$crawler->setURL("www.wikipedia.org");
$crawler->addContentTypeReceiveRule("#text/html#");

$crawler->go();
