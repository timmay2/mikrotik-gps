<?php
// Create connection & CHANGE THE USER, PASSWORD AND DATABASE DETAILS
$con=mysqli_connect("localhost","user","password","database");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$identity = mysqli_real_escape_string($con, $_GET['identity']);
$mac = mysqli_real_escape_string($con, $_GET['mac']);
$latitude = mysqli_real_escape_string($con, $_GET['latitude']);
$longitude = mysqli_real_escape_string($con, $_GET['longitude']);
$lat = mysqli_real_escape_string($con, $_GET['lat']);
$lng = mysqli_real_escape_string($con, $_GET['lng']);
$date = mysqli_real_escape_string($con, $_GET['date']);
$dbm = mysqli_real_escape_string($con, $_GET['dbm']);
$technology = mysqli_real_escape_string($con, $_GET['technology']);
$speed = mysqli_real_escape_string($con, $_GET['speed']);
$altitude = mysqli_real_escape_string($con, $_GET['altitude']);
$satellites = mysqli_real_escape_string($con, $_GET['satellites']);

$sql="INSERT INTO gps (identity, mac, latitude, longitude, lat, lng, date, dbm, technology, speed, altitude, satellites)
VALUES ('$identity', '$mac', '$latitude', '$longitude', '$lat', '$lng', $date', '$dbm', '$technology', '$speed', '$altitude', '$satellites')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

//close mysql connection
mysqli_close($con);
?>
