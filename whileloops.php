<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While Loops</title>
</head>
<body>

<h1>While Loops</h1>
    
    <!--

    -->
    <form action="whileloops.php" method="post">
       <input type="number" step="0.1" name="num1"><br>
       <input type="textbox" name="operator"><br>
       <input type="number" step="0.1" name="num2"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php

        //WHILE LOOP
        // $index = 1;

        //Syntax for while loop
        // while ($index <= 5) {
        //     echo "$index <br>";
        //     $index++;
        // }

        //DO WHILE LOOP!
        //This is different than a while loop because the code is executed before the condition is checked, in the whle loop
        //scenario, everything including 5 was printed. In this scenario 6 is printed even though the condition is <=5 because the block is executed then the condition is checked!. 
        $index = 6;
        do {
            echo "$index <br>";
            $index++;
        } while($index <= 5);
    
    ?>
    

</body>
</html>