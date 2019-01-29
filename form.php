<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <form action="form.php" method="post">
            <input type="password" name="password">
            <input type="submit">
        </form>
        <form action="form.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"/> <br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"/> <br>
            Cherries: <input type="checkbox" name="fruits[]" value="cherries"/> <br>
            <input type="submit"/>
        </form>
    <?php
    $fruits = $_POST["fruits"];
    echo "<br>";
    echo $fruits[0];
    echo $_POST["password"];
    echo "<br>";
    $friends = array("Kevin", "Micheal", "Itd itd");
    echo $friends;
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    $friends[4] = "New friend";
    echo $friends[4];
    echo "<br>";
    echo count($friends);
    ?>
        
    </body>
</html>