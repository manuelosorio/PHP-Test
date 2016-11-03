<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Environment Variables</title>
    <style media="screen">
      body {
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <?php
      #REMOTE_ADDR contains IP address.
      #use getenva() TO BE SURE THAT YOU ARE READING THE CORRECT VALUE.
      echo "<h2> \$REMOTE_ADDR </h2>";
      $address = getenv("REMOTE_ADDR");
      echo "Your ip is $address";

      #HTTP_USER_AGENT contains browser type and version, language encoding and platform.
      #Example: Mozilla/4.61 - (Win98; l)
      echo "<h2> \$HTTP_USER_AGENT </h2>";
      $agent = getenv("HTTP_USER_AGENT");
      echo "You are using $agent";
    ?>
  </body>
</html>
