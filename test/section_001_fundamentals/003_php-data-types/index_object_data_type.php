<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Object Data Type</title>
  </head>
  <body>
    <h1>Object Data Type</h1>
    <?php
      class myCar {
        function do_myCar() {
          $this->model = "Sports";
        }
      }
      // Create an object
      $Range_Rover = new MyCar(); // setting a new instance of this class
      $Range_Rover->do_myCar();
      // Show object properties
      echo $Range_Rover->model;
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
