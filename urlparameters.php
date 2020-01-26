<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url Parameters</title>
</head>
<body>

<h1>URL Parameters</h1>
    
    <form action="urlparameters.php" method="get">
        Name: <input type="text" name="name">
        <br>
        <input type="submit">
    </form>
    <br><br>
    <?php 
        echo $_GET["name"];
        //This is an example of how we can grab url parameters without actually having an input location on the page.
        //I typed in &size="Large" in the URL and it printed to the page
        //This is advantageous because users can store information in the URL so when a page is bookmarked
        //It can reload all the information as it was in the past.
        //Disadvantage of security because the info will be visible in the URL.
        echo $_GET["size"];
    ?>
    

</body>
</html>