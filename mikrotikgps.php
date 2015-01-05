<?php
// Create connection
$con=mysqli_connect("localhost","mikrotik","l3tme1n","mikrotik");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$identity = mysqli_real_escape_string($con, $_GET['identity']);
$mac = mysqli_real_escape_string($con, $_GET['mac']);
$latitude = mysqli_real_escape_string($con, $_GET['latitude']);
$longitude = mysqli_real_escape_string($con, $_GET['longitude']);
$date = mysqli_real_escape_string($con, $_GET['date']);
$dbm = mysqli_real_escape_string($con, $_GET['dbm']);
$technology = mysqli_real_escape_string($con, $_GET['technology']);

$sql="INSERT INTO gps (identity, mac, latitude, longitude, date, dbm, technology)
VALUES ('$identity', '$mac', '$latitude', '$longitude', '$date', '$dbm', '$technology')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);

//close mysql connection
mysqli_close($con);
?>
