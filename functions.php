<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>

<h1>Functions</h1>
    
    <!-- 
        
    -->
    <form action="functions.php" method="post">
        Username: <input type="text" name="user"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit">
    </form>
    <br><br>

    <?php 

        function sayHi($user, $age){
            echo "Hello $user, you are $age years old. <br>";
        }

        sayHi($_POST["user"], $_POST["age"]);
    ?>
    

</body>
</html>