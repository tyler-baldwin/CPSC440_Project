<html>

<head>
</head>

<body>

<h1>RA DATABASE</h1>

<?php

include "db_connect.php";

include "search_all_students.php";


?>
<br>
	<br>
	
<form action="search_keyword.php">
	Search for a student by first<br> <br>
	<input type="text" name="keyword">

	
	<input type="submit" value="Submit">
	
</form>

<?php
//include "search_keyword.php";

$mysqli->close();



?> 



</body>

</html>


