<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IF ELSE IF ELSE Statement</title>
  </head>
  <body>
    <h1>IF ELSE IF ELSE Statement</h1>
    <?php
      $x = date("H");
      if ($x < "12") {
        echo "Have a goog morning!";
      } else if ($x < "20") {
          echo "Have a lovely day!";
      } else {
          echo "Have a peaceful night!";
        }
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
