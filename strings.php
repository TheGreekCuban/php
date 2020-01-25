<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Working With Strings</title>
</head>
<body>
    
    <?php

    $phrase = "Giraffe Academy";
    echo $phrase . "<br>";

    //Edit string to all upper or lower case.
    echo strtolower($phrase) . "<br>";
    echo strtoupper($phrase) . "<br>";

    //Find out length of a string.
    echo strlen($phrase) . "<br>";

    //Finding the first character of a string. Strings are zero indexed. 
    echo $phrase[0] . "<br>";
    //This will work on strings without being stored in a variable.
    echo "Alex"[0] . "<br>";

    //You can also modify individual characters in the string
    //$phrase[1] = "A";
    //echo $phrase . "<br>";

    //Replace substrings within the string
    //This function is saying replace the instance of Giraffe with Panda in the phrase variable.
    echo str_replace("Giraffe", "Panda", $phrase) . "<br>";

    //This will grab a substring. First you put in the variable to grab, then you put in the index you want to start at (kind of like slice method), then you want to put in the ending index.
    echo substr($phrase, 8, 3);

    ?>
</body>
</html>