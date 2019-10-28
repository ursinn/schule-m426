<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title>Passwort Generieren</title>
  </head>
  <body>
    <table>
    <?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_m26";

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM buza";
    $result = $conn->query($sql);

    echo "<td></td>";

    $zahlen = 1;
    $spbu1 = 0;

    $abc = 'A';

    for($x=1; $x<=22; $x++){

      echo "<td>".$abc."</td>";
      $abc++;
    }
    for($y=1; $y<=11; $y++){
      echo "<tr>";
      echo "<td>".$zahlen."</td>";
      $zahlen++;

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<td>". $row["ID"]." ". $row["inhalt"]. "</td>";
          }
      } else {
          echo "0 results";
      }
      $conn->close();

      echo "</tr>";

    }

     ?>
    </table>
    <output name="result"></output>
  </body>
</html>
