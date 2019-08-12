<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    //select SQL Database
    mysqli_select_db($con, 'planet');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = " select * from customer where name -'$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows


    ?>
  </head>
  <body>

    <h1>yoloo</h1>

  </body>
</html>
