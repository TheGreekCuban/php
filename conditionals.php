<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditionals</title>
</head>
<body>

<h1>Conditionals</h1>
    
    <!-- 
        
    -->
    <form action="conditionals.php" method="post">
        <input type="text" name="user"><br>
        <input type="text" name="age"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php 

        //The conditional operators are basically all the same
        //ELSE IF IS DIFFERENT BECAUSE IT'S ONE WORD ----> elseif
        $isMale = false;
        $isTall = true; 
        
        if ($isMale && !$isTall) {
            echo "You are a short male!";
        } elseif ($isMale && $isTall) {
            echo "You are a tall male!";
        } elseif (!$isMale && $isTall) {
            echo "You are not male but you are tall!";
        } else {
            echo "You are not a male and not tall";
        }

    ?>
    

</body>
</html>