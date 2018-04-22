<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Function Arguments</title>
  </head>
  <body>
    <h1>Function Arguments</h1>
    <?php
      function familyName($fname, $year) {
        echo "$fname Doe. Born in $year <br>";
      }
      familyName("John", "1997");
      familyName("Jane", "2000");
      familyName("James", "1995");
      familyName("Jack", "2002");
      familyName("Daniel", "1984");
      echo "<br>";
      function setHeight($minHeight = 70) {
        echo "The height is: $minHeight<br>";
      }
      setHeight(370);
      setHeight();
      setHeight(137);
      setHeight(87);
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
