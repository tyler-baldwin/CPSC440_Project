<?php

include "db_connect.php";

// if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

echo"<h2>Current list of all students living on campus in Organizations</h2>";
$sql = "SELECT orgid, studentid FROM memberof ORDER BY orgid";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Organization ID: " . $row["orgid"].
	"  -student ID: " . $row["studentid"]. 
	"<br>";
  }
} else {
  echo "0 results";
}

?>