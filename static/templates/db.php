<?php
$servername = "localhost";
$username = "emeds_emeds";
$password = "emeds123#";
$dbname = "emeds_emeds";

// Create connection
$conn = mysql_connect($servername, $username, $password);
// Check connection
mysql_select_db($dbname);

?>