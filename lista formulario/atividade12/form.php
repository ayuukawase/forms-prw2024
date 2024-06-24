<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $pasta = $_POST["pasta"];
      $num_imagens = $_POST["num_imagens"];

      echo "<table>";
      echo "<tr>";

      for($i = 1; $i <= $num_imagens; $i++) {
        echo "<td>";
        echo "<img src='http://localhost/$pasta/$i.jpg' width='150' height='100'>";
        echo "</td>";
      }

      echo "</tr>";
      echo "</table>";
    }
  ?> 
</body>
</html>