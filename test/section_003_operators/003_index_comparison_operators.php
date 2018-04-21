<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Comparison Operators</title>
  </head>
  <body>
    <h1>Comparison Operators</h1>
    <?php
      // equal
      $x = 117;
      $y = "117";
      echo "Equal: ";
      var_dump($x == $y);
      echo "<br>";
      // identical
      $x = 117;
      $y = "117";
      echo "Identical: ";
      var_dump($x === $y);
      echo "<br>";
      // not identical
      $x = 117;
      $y = "117";
      echo "Not identical: ";
      var_dump($x !== $y);
      echo "<br>";
      // not equal
      $x = 117;
      $y = "117";
      echo "Not equal: ";
      var_dump($x != $y); // another way => ($x <> $y)
      echo "<br>";
      // greater than
      $x = 117;
      $y = 70;
      echo "Greater than: ";
      var_dump($x > $y);
      echo "<br>";
      // less than
      $x = 107;
      $y = 270;
      echo "Less than: ";
      var_dump($x < $y);
      echo "<br>";
      // greater than or equal to
      $x = 107;
      $y = 107;
      echo "Greater than or equal to: ";
      var_dump($x >= $y);
      echo "<br>";
      // less than or equal to
      $x = 107;
      $y = 107;
      echo "Less than or equal to: ";
      var_dump($x <= $y);
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
