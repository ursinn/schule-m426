<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <script src="js/main.js"></script>
    <title>Passwort Generieren</title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="number" name="bustaben" value="Zahl Eingeben">
      <input type="number" name="zahlen" value="Zahl Eingeben">
      <input type="submit" />
    </form>
    <?php echo $_POST['bustaben']; ?>
<?php echo $_POST['zahlen']; ?>
    <table>
    <?php

    $host = "sql7.freemysqlhosting.net";
    $username = "sql7310321";
    $password = "Q2XskPLQXJ";
    $database = "sql7310321";

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
      echo "<td class='big'>".$abc."</td>";
      $abc++;
    }
    echo "<tr>";
    echo "<td class='big'>".$zahlen."</td>";

    function generateRandomString($length = 1) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }


    for($y=1; $y<=11; $y++){

    }
  echo "<td class='datenchange'>".generateRandomString(). "</td>";
/*
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<td class='datenchange'>". $row["inhalt"]. "</td>";


              $test++;
              if($test==23 || $test==45 || $test==67 || $test==89 || $test==111 || $test==133 || $test==155 || $test==177 || $test==199 || $test==221){
                  $zahlen++;
                  echo "</tr>";
                  echo "<td class='big'>".$zahlen."</td>";
              }
              }
      } else {
          echo "0 results";


    }

      }

      $conn->close();

*/


     ?>

   </table>
     <div class="outholder">
       <output class="output" name="result">Passwort</output>
     </div>

  </body>
</html>
