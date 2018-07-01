<?php
$servername = "local.ccse.kfupm.edu.sa";
$username = "st201436120";
$password = "db4sweproj";
$dbname = "FR_Portfolio";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, "3306");
// Check connection
$error = mysqli_connect_error();
if ($error != null) {
	$output = "<p>Unable to connect to the database</p>" . $error ;
	exit($output);
} 

//get the q parameter from URL
$q=$_GET["q"];
$sql = 'DELETE FROM SUser WHERE ID="'.$q.'"';

$result = mysqli_query($conn, $sql);	

//mysqli_free_result($result);
mysqli_close($conn);

?>