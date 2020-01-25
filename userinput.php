<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getting User Input</title>
</head>
<body>


    <!-- 
        First we need to setup a form to grab the input
        All forms start with form tags, action is the file you want the form to interact with and method is either CRUD action.
        For inputs you need a name, typically this name describes what the input is.
     -->
    <form action ="userinput.php" method="get">
        Name:<input type="text" name="name">
        <br>
        Age:<input type="number" name="age">
        <br>
        <input type="submit">
    </form>
    <br>

    <!--This is going to print out the value that  -->
    Your name is <?php echo $_GET["name"]?>
    <br>
    Your age is <?php echo $_GET["age"]?>

</body>
</html>