<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP LEARNING</title>
  </head>
  <body>
    <?php
      phpinfo();
      // function helloWorld($name) {
      //   echo "Hello World! My name is " . $name . " and I am learning PHP.";
      // }
      // helloWorld("Manuel Osorio
      // ");
    ?>

      <!--This is a html Comment -->
    <?php
      // This is a C-style comment

      # This is a Shell style comment

      /*
      this comment can span multiple lines
      */
    ?>

    <?php
      echo "<h2>Assignment Operations </h2>";
      #Orginal Value
      $origVar = 100;
      echo "<p>Orginal Value is $origVar</p>";
      #add 25 to orginal value
      $origVar += 25;
      echo "<p>Added a value of 25 to the orginal, now it's $origVar</p>";
      #subtract 12 from orginal value
      $origVar -= 12;
      echo "<p>Subtracted a value of 12 to the orginal, now it's $origVar</p>";
      #add a string after number from $orgiVar
      $origVar .= " penguins";
      echo "<p>There are $origVar left with me right now.</p>";

      #Arithmetic Operations
      echo "<h2>Arithmetic Operations </h2>";
      #vars
      $a = 85;
      $b = 24;
      #Orginal Value
      echo "<p>Orginal Value for \$a is 85, and \$b is 24.</p>";
      #Addition
      $c = $a + $b;
      echo "<p>Added \$a and \$b and got $c.</P>";
      #Subtraction
      $c = $a - $b;
      echo "<p>Subtracted \$a and \$b and got $c.</P>";
      #Multiplication
      $c = $a * $b;
      echo "<p>Multiplied \$a and \$b and got $c.</P>";
      #Division
      $c = $a / $b;
      echo "<p>Divided \$a and \$b and got $c.</P>";
      #Modulus or Remainder
      $c = $a % $b;
      echo "<p>The modulus of \$a and \$b is $c.</P>";

      #Comparison Operations
      echo "<h2>Comparison Operations</h2>";
      #vars
      $x = 21;
      $y = 15;
      #Value
      echo "<p>Value for \$x is $x, and for \$y is $y.</p>";
      #Is Equal to
      if ($x == 21) {
        echo "<p>\$x is equal to \$y.</p>";
      } else {
        echo "<p>\$x is not equal to \$y.</p>";
      }
      #Is Not Equal to
      if ($x != $y) {
        echo "<p>\$x is not equal to \$y.</p>";
      } else {
        echo "<p>\$x is equal to \$y.</p>";
      }
      #Is greater than
      if ($x > $y) {
        echo "<p>\$x is greater than \$y.</p>";
      } else {
        echo "<p>\$y is less than \$y.</p>";
      }
      #Is Less than
      if ($y < $x) {
        echo "<p>\$y is less than \$x.</p>";
      } else {
        echo "<p>\$y is greater than \$x.</p>";
      }

      #Comparison Operations
      echo "<h2>Logical Operations</h2>";
      #vars
      $tempature = "95";
      $hot = "yes";
      # || means or;
      if (($tempature > 80) || ($hot == "yes")){
        echo "<p>It is hot outside!</P>";
      } else {
        echo "<p>It is not hot outside!</P>";
      }
      # && means and
      $hot = "no";
      if (($tempature > 80) && ($hot == "yes")){
        echo "<p>It is hot outside!</P>";
      } else {
        echo "<p>It is not hot outside!</P>";
      }

    ?>

  </body>
</html>
