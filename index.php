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
      <p>Anzahl Bustaben: <input type="number" name="bustaben" value="Zahl Eingeben"></p>
      <p>Anzahl Zahlen: <input type="number" name="zahlen" value="Zahl Eingeben"></p>
      <input type="submit" />
    </form>

    <table>
    <?php
    $bu = $_POST['bustaben'];
    $za = $_POST['zahlen'];
    $zahlen = 1;
    $test = 1;
    $abc = 'A';
    echo "<td></td>";
    for($x=1; $x<=$bu; $x++){
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
    //Generiert Einen String
    function generateRandomString($length = 1) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~!@#$%^&*()-_=+[]{};:,.<>/?';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }
    //Berechnung der Anzahl
    $ausgaberand = $za * $bu;
    //Ausgabe der Tabele
    echo "<tr>";
    echo "<td class='big'>".$zahlen."</td>";
    for ($i=1; $i<=$ausgaberand; $i++) {
      echo "<td class='datenchange'>".generateRandomString(). "</td>";
      if($i==$bu || $i==$bu*$zahlen){
        $zahlen++;
        echo "</tr>";
        echo "<td class='big'>".$zahlen."</td>";

  }
  }
     ?>
     <footer>
       Produkt Owner: Nicola Bühler
       Mitarbeiter: Joel Brendle
       Mitarbeiter: Ursin Filli
     </footer>
   </table>
  </body>
</html>
