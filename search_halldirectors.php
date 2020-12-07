<html lang="en">


<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
</head>

<?php
include "navbar.php"
?>
<?php

include "db_connect.php";

// if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo"<h2>Current list of all Hall Directors</h2>";
$sql = "SELECT halldirectorid, fname, lname, buildingid FROM halldirector";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Hall Director ID: " . $row["halldirectorid"].
	"  -First Name: " . $row["fname"]. 
	"  -Last Name: " . $row["lname"].
	"  -Building ID: " . $row["buildingid"]. 
	"<br>";
  }
} else {
  echo "0 results";
}

?>


</html>