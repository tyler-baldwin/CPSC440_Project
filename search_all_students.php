<?php
include "navbar.php"
?>
<?php

include "db_connect.php";

// if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


echo"<h2>Current students living on campus</h2>";
$sql = "SELECT studentid, studentyear, gender, email, roomnum, fname, lname, buildingid, raid  FROM student";
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