<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Array</title>
</head>
<body>

<h1>Associative Array</h1>
    
    <!-- 
        
    -->
    <form action="associativeArrays.php" method="post">
        Student Name: <input type="text" name="student"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php 
        //This is an associative array. We are literally mapping a key value pair in each element.
        //MAKE SURE KEYS ARE ALL UNIQUE
        //YOU CAN REASSIGN VALUES JUST LIKE A NORMAL ARRAY
        $grades = array("Jim" =>"A+", "Susan" =>"C+", "Oscar" => "B-");
        //echo count($grades) . "<br>";

        //If you want to get the value of a key the syntax is:
        //echo $grades["Oscar"] . "<br>";

        //If you want to grab the element in the associative array that matches the input from the user you would:
        //This prints out the grade of the matching key value pair based on input
        echo $grades[$_POST["student"]]
    ?>
    

</body>
</html>