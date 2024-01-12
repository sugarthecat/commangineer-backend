<?php
$servername = "localhost";
$username = "auto-commangineer";
$password = "28an289dab-BPA2023";
$dbname = "commangineer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO settings (username, audio_enabled) VALUES (\"Recruit\", 0)";
$result = $conn->query($sql);
$currentRank = 1;
$sql = "SELECT max(user_id) as new_user FROM settings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  if($row = $result->fetch_assoc()) {
    $echo = "{\"newID\": ".$row["new_user"]. "}";
  }else{

  }
} 
echo $echo;
$conn->close();
?>