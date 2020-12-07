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


echo"<h2>Current list of all Student Resident Assistants</h2>";
$sql = "SELECT raid, rainfo, halldirectorid FROM ra ORDER BY rainfo";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "RA ID: " . $row["raid"].
	"  -student ID: " . $row["rainfo"].
	"  -Hall Director: " . $row["halldirectorid"].
	"<br>";
  }
} else {
  echo "0 results";
}

?>
<br>
	<br>
<form action="search_by_studentid.php">
		<b>Search for a student by <i>Student ID</i></b><br> <br>
		<input type="text" name="fname">
		
		<br>
			<br>
		
		<input type="submit" value="Submit">


</html>