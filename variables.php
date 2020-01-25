<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        
        $characterName = John;
        $characterAge = 22;

        echo "There was a man named $characterName <br>";
        echo "He was $characterAge years old <br>";
        //You can reassign the variable and it will keep the initial name and then after the reassignment it will change. Variables are simply containers of data - like in js.

        $characterName = Mike;
        echo "He really liked the name $characterName <br>";
        echo "He didn't like being $characterAge";
    ?>

</body>
</html>