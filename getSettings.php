<?php
$servername = "localhost";
$username = "ktprog2";
$password = "Keefe2012";
$dbname = "commangineer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(!isset($_GET["userid"]) || !is_numeric($_GET["userid"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for UserID\"}");
}
// Check connection
if ($conn->connect_error) {
  die("{\"Error:\" : \"Connection failed: " . $conn->connect_error . "\"}");
}
$sql = "SELECT username, audio_enabled FROM settings WHERE user_id = \"" .$_GET["userid"]."\"";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  if($row = $result->fetch_assoc()) {
    echo "{ \"name\":\"" . $row["username"]. "\",\"audio\":" . $row["audio_enabled"]. "} ";
  }
} 
?>