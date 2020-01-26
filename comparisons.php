<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comparisons</title>
</head>
<body>

<h1>Comparisons</h1>
    
    <!-- 
        
    -->
    <form action="comparisons.php" method="post">
        <input type="text" name="user"><br>
        <input type="text" name="age"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php 

        //Reminder -> max will give you the bigger number.
        echo max(3, 6) . "<br>";

        //This is us creating our own function doing the same thing:
        //We can use the >= to compare numbers when its more than two because if num1 and 3 are equal but both bigger than number 2 that number is the biggest numebrs.
        function getMax($num1, $num2, $num3) {
            if($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2; 
            } else {
                return $num3;
            }
        }

        echo getMax(4, 1, 2);

    ?>
    

</body>
</html>