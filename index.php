

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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_m26";

    // Create connection
    $conn =  new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Fail";
    }
    echo "Connected successfully";

        //mysql_select_db($dbname);


        $sql = "SELECT inhalt FROM buza";
        $result = $conn->query($sql);


    echo "<td></td>";

    $zahlen = 1;
    $test = 1;

$abc = 'A';

    for($x=1; $x<=22; $x++){
// i löschen
// l löschen
// O löschen
// Q Löschen
      if($abc=="I" || $abc=="L" || $abc=="O" || $abc=="Q" ){
        $abc++;
      }
      echo "<td>".$abc."</td>";
      $abc++;
    }
    echo "<tr>";
    echo "<td>".$zahlen."</td>";

    for($y=1; $y<=11; $y++){


      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<td>". $row["inhalt"]. "</td>";


              $test++;
              if($test==23 || $test==45 || $test==67 || $test==89 || $test==111 || $test==133 || $test==155 || $test==177 || $test==199 || $test==221){
                  $zahlen++;
                  echo "</tr>";
                  echo "<td>".$zahlen."</td>";
              }
              }
      } else {
          echo "0 results";


    }

      }

      $conn->close();






     ?>
   </table>

<output name="result"></output>

  </body>
</html>
