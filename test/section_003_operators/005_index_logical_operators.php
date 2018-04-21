<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logical operators</title>
  </head>
  <body>
    <h1>Logical operators</h1>
    <?php
      // and => TRUE if both $a and $b are TRUE
      $x = 107;
      $y = 70;
      if ($x == 107 && $y == 70) {
        echo "Hello world!";
      }
      echo "<br>";
      // or => TRUE if either $a or $b is TRUE
      $x = 107;
      $y = 70;
      if ($x == 107 || $y == 90) {
        echo "Hello world!";
      }
      echo "<br>";
      // xor => TRUE if either $a or $b is TRUE, but not both
      $x = 107;
      $y = 70;
      if ($x == 107 xor $y == 90) {
        echo "Hello world!";
      }
      echo "<br>";
      // not => TRUE if $a is not TRUE
      $x = 107;
      if ($x !== 106) {
        echo "Yay!";
      }
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
