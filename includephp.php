<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Include PHP</title>
</head>
<body>
    
    <!--
        This is where things start to get very powerful. In the header.php file we have a template created with the
        variables below. However on those files we do not have any data assigned to the variables. That is only added here,
        therefor you can create templates and change the data that shows up differently on each page. 
    -->    

    <?php

        $title = "My first Post";
        $author= "Alexander";
        $wordCount = 400;
        
        include "articleheader.php";
        
        //This below example illustrates what is happening above but with a function. Once you write the include php statement, you can access all the php and variables in that file.

        include "usefultools.php";

        echo "<br>" . sayHi("Alexander") . "<br>";
        echo $feetInMile . "<br>";
    ?>
    

</body>
</html>