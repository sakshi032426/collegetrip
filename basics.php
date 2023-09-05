<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

        this is php website
        
        <?php
        define('PI',3.14);//ACTS AS CONSTANT
        echo"hello";
        ?>
         <?php
        $variable1=45;
        $variable2=35;
        echo $variable1;
        echo $variable2;
        //OPERATORS
        // Arithmetic Operators 
    echo "<br>";
    echo "The value of varible1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";
    //ASSIGNMENT OPERATOR
    $newVar=$variable1;
    $newVar+=1;
    //$newVar-=1;
   // $newVar*=1;
    
    echo"value of new variable";
    echo $newVar;
    echo"<br>";

    //COMPARISON OPERATOR
   // echo "<h1>comaprsn op</h1>";
   /*
   ++$x

Pre-increment

Increments $x by one, then returns $x

$x++

Post-increment

Returns $x, then increments $x by one

--$x

Pre-decrement

Decrements $x by one, then returns $x

$x--

Post-decrement

Returns $x, then decrements $x by one

*/
    echo "the value of 1==4 is ";
    echo var_dump(1==4);  
    echo"<br>";   
    echo "the value of 1!=4 is ";
    echo var_dump(1!=4); 
    echo"<br>";    
    echo "the value of 1>=4 is ";
    echo var_dump(1>=4);  
    echo"<br>";
   echo $variable1++;
   echo"<br>";
   echo $variable1;
   echo"<br>";
   echo $variable2++;
   echo"<br>";
   echo $variable2;
   echo"<br>";
   echo --$variable1;
   echo"<br>";
   echo ++$variable2;
   echo"<br>";

   //DATA TYPES
   $var="string";
   echo var_dump($var);
   echo"<br>";
   $var="67";
   echo var_dump($var);
   echo"<br>";
   $var="6.7";
   echo var_dump($var);
   echo"<br>";
   $var="true";
   echo var_dump($var);
   echo"<br>";
   echo PI;
      ?>
      
    </div>
    
</body>
</html>