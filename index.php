<?php
include( "classes/PHPCrawl/libs/PHPCrawler.class.php" );

// Extend the class and override the handleDocumentInfo()-method
class MyCrawler extends PHPCrawler
{
	function handleDocumentInfo($DocInfo)
	{
		// Just detect linebreak for output ("\n" in CLI-mode, otherwise "<br>").
		if (PHP_SAPI == "cli") $lb = "\n";
		else $lb = "<br />";

		// Print the URL and the HTTP-status-Code
		echo "Page requested: " . $DocInfo->url . " (" . $DocInfo->http_status_code . ")";

		// Now you should do something with the content of the actual
		// received page or file ($DocInfo->source), we skip it in this example

		echo $DocInfo->links_found_url_descriptors . ", ";

		flush();
	}
}

// Now, create a instance of your class, define the behaviour
// of the crawler (see class-reference for more options and details)
// and start the crawling-process.

echo "[";

$crawler = new MyCrawler();

// URL to crawl
$crawler->setURL("www.extremetech.com");

// Only receive content of files with content-type "text/html"
$crawler->addContentTypeReceiveRule("#text/html#");

// Ignore links to pictures, dont even request pictures
$crawler->addURLFilterRule("#\.(jpg|jpeg|gif|png)$# i");

// Store and send cookie-data like a browser does
$crawler->enableCookieHandling(true);

// Set the traffic-limit to 1 MB (in bytes,
// for testing we dont want to "suck" the whole site)
$crawler->setTrafficLimit(1000 * 1024);

// Thats enough, now here we go
$crawler->go();

echo "]";