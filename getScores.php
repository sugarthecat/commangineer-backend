<?php
$servername = "localhost";
$username = "auto-commangineer";
$password = "28an289dab-BPA2023";
$dbname = "commangineer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("{\"Error:\" : \"Connection failed: " . $conn->connect_error . "\"");
}
$sql = "SELECT completion_time, user FROM score ORDER BY completion_time LIMIT 5";
$result = $conn->query($sql);
$currentRank = 1;
if ($result->num_rows > 0) {
  // output data of each row
  echo "{\"scores\":[";
  while($row = $result->fetch_assoc()) {
    if($currentRank != 1){
      echo ",";
    }
    echo "{ \"name\":\"" . $row["user"]. "\",\"time\":" . $row["completion_time"]. "} ";
    $currentRank = $currentRank + 1;
  }
  echo "]}";
} else {
  echo "{'scores':[]}";
}
$conn->close();
?>