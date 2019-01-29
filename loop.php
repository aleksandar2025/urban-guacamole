<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $index = 1;
            while($index <= 5){
                echo "$index <br>";
                $index++;
                };
            echo "$index<br>";
            echo "$index<br>";


// do while loop (same as while loop but checks condition last)
            
            $ind = 6;    
                do{
                  echo "$ind <br>";
                  $ind++;
                }while($ind <= 5);
                
// for loop

        for($i = 1; $i <= 5; $i++){
            echo "$i <br>";
        };
        echo "$i<br>";
        
        
    // looping through an array
    $luckyNumbers = array(8, 15, 38, 77, 59, 100);
    
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i]<br>";
        };
        
        ?>
    </body>
</html>




