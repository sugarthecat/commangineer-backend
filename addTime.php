<?php
$servername = "localhost";
$username = "auto-commangineer";
$password = "28an289dab-BPA2023";
$dbname = "commangineer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(!isset($_GET["level"]) || !is_numeric($_GET["level"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for Level\"}");
}
if(!isset($_GET["time"]) || !is_numeric($_GET["time"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for after\"}");
}
if(!isset($_GET["userid"]) || !is_numeric($_GET["userid"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for name\"}");
}
// Check connection
if ($conn->connect_error) {
  die("{\"Error:\" : \"Connection failed: " . $conn->connect_error . "\"}");
}
$sql = "INSERT INTO run_time (level_id, completion_time, user_id) VALUES (".$_GET["level"].",".$_GET["time"].",\"".$_GET["userid"]."\")";
$result = $conn->query($sql);
$conn->close();
?>