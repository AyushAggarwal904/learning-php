<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizzing: border-box;
  }
  .container {
    max-width: 80%;
    background-color: red;
    margin: auto;
    padding: 23px;
  }
</style>
<body>
  <div class="container">
    <h1>This is container</h1>

    <?php
        $age = 4;
        if($age > 18)
        {
          echo "go";
        }
        else
        {
          echo "no";
        }

        echo "<h1>Arrays in php</h1>";
        $lang =  array("python", "php", "c++");
        echo "<br>";
        echo $lang[1];
        echo "<br>";
        echo count($lang);

        echo "<h1>Loops in php</h1>";
        $a = 0;
        while($a < 10)
        {
          echo "The value of a is: ";
          echo $a;
          echo "<br>";
          $a++;
        }

        // printing elements of array
        $a = 0;
        echo "<br>";
        while($a < count($lang))
        {
          echo "Element ";
          echo $a;
          echo " is ";
          echo $lang[$a];
          echo "<br>";
          $a++;
        }

        // do while loop is also there in php
        // for loop is another loop
        // for each

        foreach($lang as $value) {
          echo "<br>The value from for each loop is ";
          echo $value;
        }
  



  ?>
  </div>
  
  </body>
</html> 