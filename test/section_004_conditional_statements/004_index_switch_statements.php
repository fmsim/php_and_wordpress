<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Switch Statements</title>
  </head>
  <body>
    <h1>Switch Statements</h1>
    <?php
      $favFruit = "blueberry";
      switch($favFruit) {
        case "apple":
          echo "Your favorite fruit is apple";
          break;
        case "blueberry":
          echo "Your favorite fruit is an blueberry";
          break;
        case "strawberry":
          echo "Your favorit fruit is strawberry";
          break;
          default:
            echo "Your favorite fruit is neither apple, blueberry, nor strawberry";
      }
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
