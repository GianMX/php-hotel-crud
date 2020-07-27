<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `stanze`";
$results = $conn->query($sql);

  if ($results && $results->num_rows > 0) {

    $rooms = [];

    while($row = $results->fetch_assoc()) {
      $rooms[] = $row;
    }

  } elseif ($results) {

    $rooms = [];

    } else {
        echo "query error";
      }
$conn->close();
?>
