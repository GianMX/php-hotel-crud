<?php include __DIR__ . "/database.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <h1>Hotel</h1>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th>id</th>
            <th>N Stanza</th>
            <th>Piano</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($rooms as $room) { ?>
          <tr>
            <td> <?php echo $room['id']; ?> </td>
            <td> <?php echo $room["room_number"]; ?> </td>
            <td> <?php echo $room["floor"]; ?> </td>
            <td> <a href="http://localhost:8888/php-hotel-crud/room_details.php?id=<?php echo $room['id'];?>">View room details</a> </td>
          </tr>
        <?php }; ?>
        </tbody>
      </table>
    </main>
  </body>
</html>
