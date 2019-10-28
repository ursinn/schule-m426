

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
    $conn =  mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Fail";
    }
    echo "Connected successfully";

        //mysql_select_db($dbname);


        $abfrage = "SELECT `inhalt` FROM `buza` ORDER BY `Id` DESC";

        $result = mysqli_query($conn, $abfrage);



        while($row = mysql_fetch_array($result))
         echo $row['inhalt']."\n";

    echo "<td></td>";
    $zahlen = 1;
    $a = 1;
    $b = 2;
    $c = 3;
    $d = 4;
    $e = 5;
    $f = 6;
    $g = 7;
    $h = 8;
    $k = 9;
    $l = 10;
    $m = 11;

    $spbu1 = 0;

$abc = 'A';

    for($x=1; $x<=26; $x++){

      echo "<td>".$abc."</td>";
      $abc++;
    }
    for($y=1; $y<=11; $y++){
      echo "<tr>";
      echo "<td>".$zahlen."</td>";
      $zahlen++;
      echo "<td>".$result."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";
      echo "<td>".$spbu1."</td>";


      echo "</tr>";
    }


     ?>
   </table>

<output name="result"></output>

  </body>
</html>
