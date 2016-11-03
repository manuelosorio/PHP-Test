<?php
  #In order to have values be sent to php make sure to put $_POST['xyz'] instead of $xyz

  #checks for the one of the three values: val1, val2, or calc
  #if there is any value isn't filled, user is redirected back
     if (($_POST['val1'] == "") || ($_POST['val2'] == "") || ($_POST['calc'] == "")){
      #header statement printing a new location (url of form)
       header("Location: http://localhost:8080/php-test/calc-form.html");
      #exits script
       exit;
     }
  #if else for the calculations
  // var_dump($_POST);
  if ($_POST['calc'] == "add") {
    $result = $_POST['val1'] + $_POST['val2'];
  } else if ($_POST['calc'] == "subtract") {
    $result = $_POST['val1'] - $_POST['val2'];
  } else if ($_POST['calc'] == "multiply") {
    $result = $_POST['val1'] * $_POST['val2'];
  } else if ($_POST['calc'] == "divide") {
    $result = $_POST['val1'] / $_POST['val2'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculation Result</title>
    <style media="screen">
      body {
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <p>
      The results of this calculation is: <?php echo "$result" ?><br>
      <a href="calc-form.html">Make a new calculation.</a>
    </p>
  </body>
</html>
