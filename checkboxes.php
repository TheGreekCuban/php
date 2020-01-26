<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Check Boxes</title>
</head>
<body>

<h1>Check Boxes</h1>
    
    <!-- 
        If you notice in the name attributes it's fruits[] this indicates that all the values will be stored in the same fruits array when the box is checked.
    -->
    <form action="checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Bananas: <input type="checkbox" name="fruits[]" value="Bananas"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pairs: <input type="checkbox" name="fruits[]" value="pairs"><br>
        Dragon Fruit: <input type="checkbox" name="fruits[]" value="dragonFruit"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php 
        //This variable is already an array due to the name attribute in the html being fruits[]
        $fruits = $_POST["fruits"];

        echo $fruits[0] . "<br>";
        echo $fruits[1] . "<br>";
        echo $fruits[2] . "<br>";
    ?>
    

</body>
</html>