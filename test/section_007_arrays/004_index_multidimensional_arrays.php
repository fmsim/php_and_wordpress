<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Multidimensional Arrays</title>
  </head>
  <body>
    <h1>Multidimensional Arrays</h1>
    <?php
      $computers = [
        ["Apple", 47, 20],
        ["IBM", 17, 11],
        ["Toshiba", 7, 3],
        ["Dell", 37, 17]
      ];
      echo $computers[0][0] . ": In stock: " . $computers[0][1] . ", sold " . $computers[0][2] . "<br>";
      echo $computers[1][0] . ": In stock: " . $computers[1][1] . ", sold " . $computers[1][2] . "<br>";
      echo $computers[2][0] . ": In stock: " . $computers[2][1] . ", sold " . $computers[2][2] . "<br>";
      echo $computers[3][0] . ": In stock: " . $computers[3][1] . ", sold " . $computers[3][2] . "<br>";
      echo "<br>";
      echo "<tr>";
      foreach ($computers[0] as $value) {
        echo "<td>" . " " . $value . " " . "</td>";
      }
      echo "</tr>";
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
