<html>

<head>
</head>

<body>

<h1><center>RA DATABASE</center></h1>

<?php

include "db_connect.php";

include "search_all_students.php";

?>
<br>
	<br>
	
<form action="search_keyword.php">
	<b>Search for a student by <i>FIRST</i> name</b><br> <br>
	<input type="text" name="keyword">
	
	<br>
		<br>
	
	<input type="submit" value="Submit">
	
</form>


<hr>
<form action="add_student.php">
	<h3>Enter a new student:</h3><br><br>
	
	<b>Enter Student ID:</b><br>
	<input type="text" name="studentid"><br><br>
	
	<b>Enter Student year:</b><br>
	<input type="text" name="studentyear"><br><br>
	
	<b>Enter Student gender (M/F):</b><br>
	<input type="text" name="studentgender"><br><br>
	
	<b>Enter Student email:</b><br>
	<input type="text" name="studentemail"><br><br>
	
	<b>Enter Student room number:</b><br>
	<input type="text" name="studentroom"><br><br>
	
	<b>Enter First Name:</b><br>
	<input type="text" name="newfname"><br><br>

	<b>Enter Last Name:</b> <br>
	<input type="text" name="newlname"><br><br>
	
	<b>Enter Building ID:</b> <br>
	<input type="text" name="newbuildingid"><br><br>
	
	<b>Enter RA ID:</b> <br>
	<input type="text" name="newraid"><br><br>
	
	<br>
		<br>
	<input type="submit" value="Submit">
	
</form>



<?php
//include "search_keyword.php";

$mysqli->close();

?> 



</body>

</html>


