<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="switch.php" method="POST">
            What is your grade: <input type="text" name="grade"/>
            <input type="submit" name="button"/>
        </form>
        
        <?php
         $grade = $_POST["grade"];
         switch($grade){
             case "A":
                 echo "You did amazing";
                 break;
                 case "B":
                     echo "You did great";
                     break;
                     case "C":
                         echo "You did alright, you can do better";
                         break;
                         case "D":
                             echo "You can do much better than this";
                             break;
                             case "F":
                                 echo "You have failed";
                                 break;
                                 default:
                                     echo "Enter a valid grade";
                                     break;
                                 
         };
        
        ?>
    </body>
</html>