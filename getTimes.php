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
if(!isset($_GET["after"]) || !is_numeric($_GET["after"])){
  die("{\"Error:\" : \"Connection failed: no value / invalid passed for after\"}");
}
// Check connection
if ($conn->connect_error) {
  die("{\"Error:\" : \"Connection failed: " . $conn->connect_error . "\"}");
}
$sql = "SELECT completion_time, user FROM run_time WHERE level_id = " .$_GET["level"]." ORDER BY completion_time LIMIT 5 OFFSET " . $_GET["after"];
$result = $conn->query($sql);
$currentRank = 1;
if ($result->num_rows > 0) {
  // output data of each row
  echo "{\"times\":[";
  while($row = $result->fetch_assoc()) {
    if($currentRank != 1){
      echo ",";
    }
    echo "{ \"name\":\"" . $row["user"]. "\",\"time\":" . $row["completion_time"]. "} ";
    $currentRank = $currentRank + 1;
  }
  echo "]}";
} else {
  echo "{'times':[]}";
}
$conn->close();
?>