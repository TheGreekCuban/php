<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Calculator</title>
</head>
<body>

<h1>Basic Adlib</h1> 

    <form action="adlibs.php" method="get">
        Color: <input type="text" name="color">
        <br>
        Plural Noun: <input type="text" name="pluralNoun">
        <br>
        Celebrity: <input type="text" name="celebrity">
        <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
    
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";

    ?>

</body>
</html>