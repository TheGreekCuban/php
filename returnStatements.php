<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return statements</title>
</head>
<body>

<h1>Return Statements</h1>
    
    <!-- 
        
    -->
    <form action="returnStatements.php" method="post">
        <input type="text" name="user"><br>
        <input type="text" name="age"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php 

        //This is interesting because i tried to set a variable inside the function to store it and then return the echo of the answer in a sentence and it would not work. I wonder if you cant store values within a function.
        function cube($num) {
            return $num * $num * $num;
        }

        echo cube(4) . "<br>";

    ?>
    

</body>
</html>