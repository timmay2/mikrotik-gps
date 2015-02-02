<?php

require("phpsqlajax_dbinfo.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server

$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

// $query = "SELECT * FROM gps WHERE 1";
// $query = "SELECT * FROM  `gps` ORDER BY  `gps`.`PID` DESC LIMIT 3";
// $query = "SELECT * FROM  `gps` WHERE  `datetime` >  '2015-01-23 00:00:00'";
 $query = "SELECT * FROM  `gps` WHERE `datetime` >= NOW() - INTERVAL 1 DAY";

$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("identity",$row['identity']);
  $newnode->setAttribute("mac", $row['mac']);
  $newnode->setAttribute("date", $row['datetime']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("dbm", $row['dbm']);
  $newnode->setAttribute("technology", $row['technology']);
  $newnode->setAttribute("speed", $row['speed']);
  $newnode->setAttribute("altitude", $row['altitude']);
  $newnode->setAttribute("satellites", $row['satellites']);
}

echo $dom->saveXML();

?>
