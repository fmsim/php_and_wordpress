<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Associative Arrays</title>
  </head>
  <body>
    <h1>Associative Arrays</h1>
    <?php
      $age = ["John" => "37", "Jane" => "27", "James" => "47"];
      //echo "John is " . $age['John'] . " years old.";
      foreach ($age as $x => $x_value) {
        echo "Key = " . $x . ", value = " . $x_value;
        echo "<br>";
      }
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
