<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Increment and Decrement Operator</title>
  </head>
  <body>
    <h1>Increment and Decrement Operator</h1>
    <?php
      // pre-increment
      $x = 17;
      echo ++$x;
      echo "<br>";
      // post-increment
      $x = 17;
      echo $x++;
      echo "<br>";
      echo $x++;
      echo "<br>";
      // pre-decrement
      $x = 17;
      echo --$x;
      echo "<br>";
      // post-decrement
      $x = 17;
      echo $x--;
      echo "<br>";
      echo $x--;
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
