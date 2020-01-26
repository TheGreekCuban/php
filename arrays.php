<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

<h1>Arrays</h1>
    
    <!-- 

    -->
    <form action="arrays.php" method="post">
        Password: <input type="password" name="password">
        <br>
        <input type="submit">
    </form>
    <br><br>

    <?php 
        $friends = array("Kevin", "Brandon", false, 4);

        //You can reassign elements in the array like so:
        $friends[1] = "Dwight! <br>";

        //This just prints out Array, not the elements inside.
        echo $friends . "<br>";
        echo $friends[0] . "<br>"; 
        echo $friends[1] . "<br>"; 
        echo $friends[3] . "<br>"; 

        //You can also add information on to the array.
        $friends[4] = "Angela";

        echo $friends[4] . "<br>";

        //Finding out how many elements are in an array
        echo count($friends) . "<br>";
    ?>
    

</body>
</html>