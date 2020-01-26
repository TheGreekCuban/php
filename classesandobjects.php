<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes and Objects</title>
</head>
<body>
    
    <!--
    
    -->    

    <?php

        //Classes are custom data types with attributes.  This is a blue print for the object which is an instance of the class.
        class Book {
            //Below are attributes. These are essentially specifications that tell us that every Book will have a title, author and amount of pages.
            var $title;
            var $author;
            var $pages;
        }

        //Below is an object. An object is an instance of a class!
        $book1 = new Book;
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        $book2 = new Book;
        $book2->title = "LOTR";
        $book2->author = "Tolkien";
        $book2->pages = 700;


        echo $book1 -> title . "<br>";

    ?>
    

</body>
</html>