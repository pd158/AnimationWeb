<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Create connection
    $con = mysqli_connect($servername, $username, $password);

    //select SQL Database
    mysqli_select_db($con, 'planet');

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    /////////////////////////////////////////////////////////////////////////
    if(isset($_POST['create'])){
      $fname = $_POST['first'];
      $name = $_POST['user'];
      $pass = $_POST['psw'];
      $email = $_POST['email'];

      $sql = "INSERT INTO customer (first, user, psw, email) VALUES(?,?,?,?)"
    }


    $s = " select * from customer where name -'$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
      echo "Username Already taken";
    }else{
      $reg = "insert into customer(firstname, username, password, email)";
      mysqli_query($con, $reg);
      echo "Registration Successful";


    }




    ?>
  </head>
  <body>

    <h1>yoloo</h1>

  </body>
</html>
