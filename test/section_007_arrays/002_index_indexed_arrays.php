<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Indexed Arrays</title>
  </head>
  <body>
    <h1>Indexed Arrays</h1>
    <?php
      $myCars = ["Range Rover", "Ford", "Porsche"];
      //echo "I like " . $myCars[0] . ", " . $myCars[1] . " and " . $myCars[2] . ".";
      //echo count($myCars);
      $arrLength = count($myCars);
      for ($x = 0; $x < $arrLength; $x++) {
        echo $myCars[$x];
        echo "<br>";
      }
      echo "<br>";
      foreach ($myCars as $myCar) {
        echo $myCar;
        echo "<br>";
      }
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
