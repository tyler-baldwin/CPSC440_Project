<?php
include "navbar.php"
?>
<?php

include "db_connect.php";

// if there are any values in the table, display them one at a time.
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo"<h2>Current list of all Organizations</h2>";
$sql = "SELECT orgid, orgname FROM organization";
$result = $mysqli->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Organization ID: " . $row["orgid"].
	"  -Organization Name: " . $row["orgname"]. 
	"<br>";
  }
} else {
  echo "0 results";
}

?>