<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "planet";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


    ?>
  </head>
  <body>

    <h1>yoloo</h1>

  </body>
</html>
