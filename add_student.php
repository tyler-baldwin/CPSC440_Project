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

<body>
	<?php

	include "db_connect.php";

	$studentid = $_GET["studentid"];
	$studentyear = $_GET["studentyear"];
	$studentgender = $_GET["studentgender"];
	$studentemail = $_GET["studentemail"];
	$studentroom = $_GET["studentroom"];
	$newfname = $_GET["newfname"];
	$newlname = $_GET["newlname"];
	$newbuildingid = $_GET["newbuildingid"];
	$newraid = $_GET["newraid"];

	// add to the database
	echo "<h2>New student</h2>";

	$sql = "INSERT INTO student (studentid, studentyear, gender, email, roomnum, fname, lname, buildingid, raid)
		VALUES ('$studentid', '$studentyear', '$studentgender', '$studentemail', '$studentroom', '$newfname',
		'$newlname', '$newbuildingid', '$newraid')";
	$result = $mysqli->query($sql);


	//will show all students and new student.
	echo "<font size = '5'>";
	echo "Hello! You have added " . $_GET["newfname"];
	echo " " . $_GET["newlname"];
	echo " student ID:" . $_GET["studentid"];
	echo ", in building" . $_GET["newbuildingid"];
	echo ", in room" . $_GET["studentroom"];
	echo " " . $_GET["newfname"];
	echo " Resident assistant is" . $_GET["newraid"];
	echo "</font>";


	//include "search_all_students.php" 

	echo "<h2>Current students living on campus</h2>";
	$sql = "SELECT studentid, studentyear, gender, email, roomnum, fname, lname, buildingid, raid  FROM student";
	$result = $mysqli->query($sql);


	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "Student ID: " . $row["studentid"] .
				"  -Student Year: " . $row["studentyear"] .
				" -gender: " . $row["gender"] .
				" -email " . $row["email"] .
				" -Room Number " . $row["roomnum"] .
				" -first name: " . $row["fname"] .
				" -last name: " . $row["lname"] .
				" -Building ID: " . $row["buildingid"] .
				" -RA ID: " . $row["raid"] .
				"<br>";
		}
	} else {
		echo "0 results";
	}


	?>

	<br>
	<br>



</html>