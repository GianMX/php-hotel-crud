<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";


$room = $_GET['id'];
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `stanze` WHERE `id` = $room";
$results = $conn->query($sql);

  if ($results && $results->num_rows > 0) {

    $room_detail = [];

    // Put single row (that rappresents single room) in array ($rooms)
    while($row = $results->fetch_assoc()) {
      $room_detail[] = $row;
    }

  } elseif ($results) {

    // 0 results
    $room_detail = [];

    } else {
        echo "query error";
      }
$conn->close();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Hotel</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
      <header>
        <h1>Hotel</h1>
      </header>
      <main>
        <h2>Dettagli Stanza: </h2>
        <ul>
          <?php foreach ($room_detail as $key) { ?>
            <li>Nomero stazna: <?php echo $key['room_number']; ?> </li>
            <li>Piano: <?php echo $key['floor']; ?> </li>
            <li>Letti: <?php echo $key['beds']; ?> </li>
          <?php } ?>
        </ul>
        <a href="http://localhost:8888/esercizio-boolean-hotel">torna indietro</a>
      </main>
  </body>
</html>
