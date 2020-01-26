<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Calculator</title>
</head>
<body>

<h1>Basic PHP Calculator</h1> 

    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    <!-- 
        Because the type=number in the form, php will understand these at numbers and not concatenate them. 
        KEY CONCEPT IF YOU NOTICE THE NUMBERS INPUTED ARE ALSO EDITED IN THE HTML. THIS IS A KEY CONCEPT IN PHP
        
    -->
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
    
</body>
</html>