<?php
$servername = "localhost";
$username = "ktprog2";
$password = "Keefe2012";
$dbname = "commangineer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(!isset($_GET["userid"]) || !is_numeric($_GET["userid"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for Level\"}");
}
if(!isset($_GET["audio"]) || !is_numeric($_GET["audio"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for audio\"}");
}
if(!isset($_GET["fname"]) || !ctype_alpha($_GET["fname"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for first name\"}");
}
if(!isset($_GET["lname"]) || !ctype_alpha($_GET["lname"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for last name\"}");
}
if(!isset($_GET["rank"]) || !ctype_alpha($_GET["rank"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for rank\"}");
}
$name = $_GET["rank"]. " " .$_GET["fname"]. " " . $_GET["lname"];
// Check connection
if ($conn->connect_error) {
  die("{\"Error:\" : \"Connection failed: " . $conn->connect_error . "\"}");
}
$sql = "UPDATE settings SET username = \"".$name."\", audio_enabled = " . $_GET["audio"]." WHERE user_id = ".$_GET["userid"];
$result = $conn->query($sql);
$conn->close();
?>