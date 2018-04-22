<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHP mktime() and strtotime()</title>
  </head>
  <body>
    <h1>PHP create your own timestamp with mktime()</h1>
    <?php
      /*
        Create a Date With PHP mktime()
          The Unix timestamp contains the number of seconds between the Unix Epoch
          (January 11970 00:00:00 GMT)
          and the timespecified.
          Syntax: mktime(hour,minute,second,month,day,year)
      */
      $d = mktime(14, 15, 47, 2, 12, 2017);
      echo "Created date is: " . date("Y-m-d h:i:sa", $d); // "H" => 24-hour format of an hour with leading zeros
      echo "<br>";
      echo "Created date is: " . date("Y-m-d H:i:s", $d);
    ?>
    <h1>Create a Date From a String With PHP strtotime()</h1>
    <?php
      /*
        Used to convert a human readable string to a Unix time.
        Syntax: strtotime(time,now)
      */
      $d = strtotime("10:30pm April 17 2017");
      echo "Created date is: " . date("Y-m-d h:i:sa", $d);
      echo "<br>";
      echo "<br>";
      echo "<h2>strtotime(day) loop</h2>";
      $startDate = strtotime("Saturday");
      $endDate = strtotime("+10 weeks", $startDate);
      while ($startDate < $endDate) {
        echo date("M d", $startDate) . "<br>";
        $startDate = strtotime("+1 week", $startDate);
      }
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
