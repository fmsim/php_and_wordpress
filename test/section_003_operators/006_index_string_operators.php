<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>String operators</title>
  </head>
  <body>
    <h1>String operators</h1>
    <?php
      // concatenation
      $txt1 = "Dark ";
      $txt2 = "Chocolates!";
      echo $txt1 . $txt2;
      echo "<br>";
        // concatenation assignment
        $txt1 = "Dark ";
        $txt2 = "Chocolates!";
        $txt1 .= $txt2;
        echo $txt1;
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
