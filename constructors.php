<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constructors</title>
</head>
<body>
    
    <!--
    
    -->    

    <?php

        class Book {
            var $title;
            var $author;
            var $pages;

            //This is a constructor, everytime a new book object (instance of class Book), this function is run. Also its two _ _ not just one.
            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "Jk Rowling", 540);
        $book2 = new Book("LOTR", "Tolkien", 700);

        echo $book1->title . "<br>";

        //You can still reassing attribute values after the instance is created like so:
        $book1->title = "The Moon Is A Harsh Mistress";
        echo $book1->title . "<br>";
    ?>
    

</body>
</html>