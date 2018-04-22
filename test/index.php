<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>STRING Functions</title>
  </head>
  <body>
    <h1>STRING Functions</h1>
    <?php
      echo strlen("Hello world!");
      echo "<br>";
      echo str_word_count("Hello world!");
      echo "<br>";
      echo strrev("Hello world!");
      echo "<br>";
      echo strpos("Hello world!", "world"); // find first character from the searched word
      echo "<br>";
      echo str_replace("world", "Udemy", "Hello world!");
      echo "<br>";
      echo strtolower("Hello WORLD!");
      echo "<br>";
      echo strtoupper("Hello WORLD!");
      echo "<br>";
      echo lcfirst("Hello world!"); // lowercase first letter
      echo "<br>";
      echo ucfirst("hello world!"); // uppercase first letter
      echo "<br>";
      $str = "Hello world!";
      echo $str . "<br>";
      echo trim($str, "Hed!"); // trim =>deleted specified characters
      echo "<br>";
      $str = "Hello world!";
      echo $str . "<br>";
      echo ltrim($str, "Hello");
      echo "<br>";
      $str = "Hello world!";
      echo $str . "<br>";
      echo rtrim($str, "world!");
      echo "<br>";
      echo substr("Hello world!", 6); // substr => returned the specified characters
    ?>
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--<script type="text/javascript" src=".js"></script>-->
  </body>
</html>
