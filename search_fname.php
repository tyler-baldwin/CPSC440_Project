<?php

include "db_connect.php";
$keywordfromform = $_GET["fname"];

// Search the database
echo"<h2>You searched for $keywordfromform</h2>";
$sql = "SELECT studentid, studentyear, gender, email, roomnum, fname, lname, buildingid, raid  FROM student 
		WHERE fname LIKE '%"  .  $keywordfromform  .  "%'";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Student ID: " . $row["studentid"]. 
	"  -Student Year: " . $row["studentyear"]. 
	" -gender: " . $row["gender"].
	" -email " . $row["email"].
	" -Room Number " . $row["roomnum"]. 
	" -first name: " . $row["fname"].
	" -last name: " . $row["lname"].
	" -Building ID: " . $row["buildingid"].
	" -RA ID: " . $row["raid"].
	"<br>";
  }
} else {
  echo "0 results";
}

?>