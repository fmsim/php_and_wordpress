<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP Static Variable Scope</title>
  </head>
  <body>
    <h1>PHP Static Variable Scope</h1>
    <?php
      /*
        PHP Variables Scope
        PHP has three different variable scopes:
        *  Local : A variable declared within a function
        *  Global: A variable declared outside a function
        *  Static: A static variable exists only in a local function scope
        *          but does not lose it's value
      */
      /*
      function test() {
        $k = 0;
        echo $k;
        $k++;
      }
      test(); // runs function
      echo "<br>";
      test();
      */
      function test() {
        static $k = 0;
        echo $k;
        $k++;
      }
      test(); // runs function
      echo "<br>";
      test();
      echo "<br>";
      test();
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
