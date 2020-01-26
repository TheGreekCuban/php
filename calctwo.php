<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator Two</title>
</head>
<body>

<h1>Calculator Two</h1>
    
    <!-- 
        IF YOU ENTER A FLOAT NUMBER IN THIS FORM IT WILL NOT REGISTER BECAUSE TYPE="NUMBER" ONLY ALLOWS WHOLE NUMBERS
        IF YOU WANT TO HAVE DECIMALS YOU HAVE TO ADD A STEP ATTRIBUTE. 
    -->
    <form action="calctwo.php" method="post">
        Number 1: <input type="number" step="0.1" name="num1"><br>
        Operator: <input type="textbox" name="operator"><br>
        Number 2: <input type="number" step="0.1" name="num2"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php
    
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];

        //Lesson is using if statements but I want to use switch
        //If using if statement you just use ==, there are no === !
        switch ($operator) {
            case "+":
                echo $num1 + $num2;
                break;
            case "-":
                echo $num1 - $num2;
                break;
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                echo $num1 / $num2;
                break;
            default:
                echo "You have to enter a valid operator!";
            
        }


    ?>
    

</body>
</html>