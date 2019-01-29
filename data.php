<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
    <form action="data.php" method="POST">
            <input type="text" name="student"/>
            <input type="submit" name=""/>
        </form>
    
    <?php
    $grades = array("Jim" => "A+", "Amy" => "B", "Tyrone"=>"F") ;
    echo $grades[$_POST["student"]];
    ?>
        
    </body>
</html>