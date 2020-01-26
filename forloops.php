<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Loops</title>
</head>
<body>

<h1>For Loops</h1>
    
    <!--

    -->
    <form action="forloops.php" method="post">
       <input type="number" step="0.1" name="num1"><br>
       <input type="textbox" name="operator"><br>
       <input type="number" step="0.1" name="num2"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php

        $luckyNumbers = array(5, 7, 8, 22, 9, 42, 1002, 2305, 51, 22);

        //For loop syntax looks basically the same as js.
        for($i = 0; $i <= count($luckyNumbers); $i++) {
            echo "$luckyNumbers[$i] <br>";
        }


    
    ?>
    

</body>
</html>