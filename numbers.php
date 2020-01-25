<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working With Numbers</title>
</head>
<body>

    <?php
        /*
        PHP differentiates integers and floating point numbers.
        PHP Integers
        An integer is a number without any decimal part.

        2, 256, -256, 10358, -179567 are all integers. While 7.56, 10.0, 150.67 are floats.

        So, an integer data type is a non-decimal number between -2147483648 and 2147483647. A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.

        Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).

        Here are some rules for integers:

        An integer must have at least one digit
        An integer must not have a decimal point
        An integer can be either positive or negative
        Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
        PHP has the following functions to check if the type of a variable is integer:

        is_int()
        is_integer() - alias of is_int()
        is_long() - alias of is_int()
        */

        echo 5 + 9 . "<br>";
        echo 5 * 9 . "<br>";
        echo 5.7 - 3 . "<br>";
        echo 4 / 2 . "<br>";
        echo 10 % 3 . "<br>";

        //PHP follows PEMDAS order of operations, standard math rules. 
        echo (4+5) * 10 . "<br>";

        //Storing a number within a variable
        $num = 10;
        echo $num . "<br>";

        //Increments are the same as js
        $num++;
        echo $num . "<br>";

        //Addition subtraction shorthand all the same as js +=, -=, *=, /=
        $num+=24;
        echo $num . "<br>";

        //MORE COMPLEX MATH OPERATIONS

        //Absolute value
        echo abs(-100) . "<br>";

        //Raise a number to the power. This raises the number 2 to the 4th power;
        echo pow(2, 4) . "<br>";

        //Square root function
        echo sqrt(144) . "<br>";

        //Comparing numbers. Max tells us which number is the bigger number
        echo max(9999, 120039) . "<br>";
        //Opposite of max.    
        echo min(2, 24291) . "<br>";

        //Rounds numbers according to standard rounding rules
        echo round(3.4) . "<br>";

        //Ceil always rounds the number up and floor always rounds the number down.
        echo ceil(33.4) . "<br>";
        echo floor(3.9) . "<br>";
    ?>
    
</body>
</html>