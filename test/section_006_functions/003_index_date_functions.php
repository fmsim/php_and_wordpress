<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DATE Functions</title>
  </head>
  <body>
    <h1>DATE Functions</h1>
    <?php
      echo "The date today is " . date("Y/m/d") . "<br>";
      echo "The date today is today is " . date("Y.m.d") . "<br>";
      echo "The date today is Today is " . date("Y-m-d") . "<br>";
      echo "Today is " . date("l") . "<br>";
    ?>
    <h2>PHP copyright insert</h2>
    &copy;<?php echo date("Y"); ?>
    <br>
    <h2>PHP Time Format</h2>
    <?php
      date_default_timezone_set("America/New_York");
      echo "The time is: " . date("h:i:sa");
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
