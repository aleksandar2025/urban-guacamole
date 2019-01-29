<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
       
    <?php
        function sayHi($name){
            echo "Hello $name";
        };
        sayHi(Alex);
        
        
        function cube($num){
            $cubeNum = $num * $num * $num;
            return $cubeNum;
            
        };
        echo cube(4);
        echo "<br>";
    ?>
    
    <?php
    
    function cubee($num){
     return $num * $num * $num;  
    };
    $cubeResult = cubee(4);
    echo $cubeResult;
    echo "<br>";
    
    ?>
    
    
    <?php 
    $isMale = false;
    $isTall = true;
    if($isMale && $isTall){
        echo "You're a tall male";
    } elseif($isMale && !$isTall){
        echo "You're a male";
    } elseif(!$isMale && $isTall){
        echo "You're a tall female";
    } else {
        echo "You're female";
    }
    
    echo "<br>";
    
    function getMax($num1, $num2){
        if($num1 > $num2){
            return $num1;
        } elseif($num1 == $num2){
            return "Both numbers are equal";
        } else {
            return $num2;
        }
    };
    
    echo getMax(6, 3);
    echo "<br>";
    
    
    
    ?>
    
    <form action="function.php" method="post">
            First Number: <br> <input type="number" step="0.1" name="num1">
            <br>
            OP: <br> <input type="text" name="op"/>
            <br>
            Second Number: <br><input type="number" step="0.1" name="num2"> 
            <br>
            <button type="submit">Calculate</button>
        </form> 
        
        <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
        
        if($op == "+"){
            echo $num1 + $num2;
        } elseif($op == "-"){
            echo $num1 - $num2;
        } elseif($op == "*"){
            echo $num1 * $num2;
        } elseif($op == "/"){
            echo $num1 / $num2;
        } elseif($op == "%"){
            echo $num1 % $num2;
        } else {
            echo "Invalid operator. Use: +,-,/,*,%";
        }    
        ?>
        
    </body>
</html>