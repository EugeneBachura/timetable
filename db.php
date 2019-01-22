<?php 
$user = "root";
$password = "";

try {
	$db = new PDO("mysql:host=localhost;dbname=timetable", $user, $password);
	//echo "OK~";
} catch (Exception $e) {
	echo "<p> Извините, в данный момент расписание недоступно. </p>";
	//echo $e->getMessage();
}
 ?>