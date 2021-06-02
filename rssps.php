<?php
include('config.php');
error_reporting(E_ALL);

$siteURL = "http://tutorials.vufu.net" . $_SERVER['HTTP_HOST'];
$feedTitle = "Latest Photoshop Tutorials Added";
$rssVersion = 2.0;

function generateFeed ( $homeURL, $title, $version = 2.0) {
// a little check for the arguments thrown in.
if ( func_num_args() < 2)
exit ("Insufficant Parameters");

// only select the columns you need, thus reducing the work the DBMS has to do.
$query = "SELECT * FROM `ps` WHERE `aprove`='Yes' ORDER BY `id` DESC LIMIT 10";
// execute the query
$results = mysql_query ($query) or exit( mysql_error());

// check for the number of rows returned before doing any further actions.
if (mysql_num_rows ($results) == 0){
exit("Nothing to Show Here");
}
else {
$rss = "";
// tell the browser we want xml output by setting the following header.
header("Content-Type: text/xml; charset=utf-8");

// set the xml document properties and tell it a location of a stylesheet.
$rss .= "<?xml version=\"1.0\" ?>\r\n";
$rss .= "<?xml-stylesheet type=\"text/css\" href=\"http://tutorials.vufu.net/rss.css\" ?>\r\n";

// set the RSS version using the version parameter
$rss .= "<rss version=\"$version\">\r\n";

// each RSS feed has a channel and a title, Using the title parameter we set the title of the feed.
$rss .= "<channel>\r\n";
$rss .= "<title>" . ucwords($title) . "</title>\r\n";

while ($row = mysql_fetch_array($results)){

$rss .= "<item>\r\n";
$rss .= "<title>" . date("D dS M Y", $row['data']) . " : " . $row['title'] . "</title>\r\n";
$rss .= "<description>" . stripslashes(trim($row['descriere'])) . " - " . stripslashes($row['user']) . "</description>\r\n";

$rss .= "<link>http://tutorials.vufu.net/ps_tutorial.php?id=" . $row['id'] . "</link>\r\n";


$rss .= "</item>\r\n\r\n";
}

$rss .= "</channel>\r\n";
$rss .= "</rss>\r\n";

echo $rss;
}


}

// call the function with all our settings from the top of the script
generateFeed( $siteURL , $feedTitle, $rssVersion );

?>
