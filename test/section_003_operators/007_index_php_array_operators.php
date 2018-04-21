<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Array Operators</title>
  </head>
  <body>
    <h1>PHP Array Operators</h1>
    <?php
      // union
      $x = ["a" => "red", "b" => "green"];
      $y = ["c" => "blue", "d" => "yellow"];
      print_r($x + $y);
      echo "<br>";
      // equality
      $x = ["a" => "red", "b" => "green"];
      $y = ["c" => "blue", "d" => "yellow"];
      var_dump($x == $y);
      echo "<br>";
      // identity
      $x = ["a" => "red", "b" => "green"];
      $y = ["c" => "blue", "d" => "yellow"];
      var_dump($x === $y);
      echo "<br>";
      // inequality
      $x = ["a" => "red", "b" => "green"];
      $y = ["c" => "blue", "d" => "yellow"];
      var_dump($x != $y);
      echo "<br>";
      // non-identity
      $x = ["a" => "red", "b" => "green"];
      $y = ["c" => "blue", "d" => "yellow"];
      var_dump($x !== $y);
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
