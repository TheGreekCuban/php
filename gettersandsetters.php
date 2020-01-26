<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Getters and Setters</title>
</head>
<body>
    
    <!--
        GETTERS AND SETTERS ARE SPECIAL FUNCTIONS THAT WE CAN DEFINE IN OUR CLASSES THAT CONTROL WHO CAN ACCESS THESE ATTRIBUTES

        VISIBILITY MODIFIERS-> KEY WORDS THAT TELL PHP WHAT IS ACCESSIBLE VIA OUR CODE
        PUBLIC - THIS IS ACCESSIBLE IN ANY OTHER CODE IN OUR PHP. I CAN CHANGE A ATTRIBUTE VALUE OUTSIDE OF THE CLASS
        PRIVATE - THIS WILL MEAN THAT ONLY CODE WITHIN THE CLASS CAN ACCESS THAT VARIABLE DIRECTLY.
        PROTECTED - YOU CAN ACCESS THE VARIABLE WITHIN THE CLASS AND ANY OBJECT THAT EXTENDS CLASS
    
    -->    

    <?php

        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);

            }
            
            //THIS IS A GETTER, WHICH WILL ALLOW PPL TO ACCESS THE PRIVATE RATING VARIABLE.
            function getRating() {
                return $this->rating;
            }

            //THIS IS A SETTER, THIS WILL ALLOW PPL TO SET THE PRIVATE RATING VARIABLE.
            function setRating($rating) {
                switch($rating) {
                    case "G":
                        $this->rating = $rating;
                        break;
                    case "PG":
                        $this->rating = $rating;
                        break;
                    case "PG-13":
                        $this->rating = $rating;
                        break;
                    case "R":
                        $this->rating = $rating;
                        break;
                    case "NR":
                        $this->rating = $rating;
                        break;
                    default:
                        $this->rating = "NR";
                }
            }

        }

        //Without changing the constructor inside the class, we can still get away with setting random ratings in the new object below. So you have to set the constructor to the setRating() method so that function runs every time it's set. 
        $avengers = new Movie("Avengers", "PG-13");
        // G, PG, PG-13, R, NR are the only possible ratings. However, I could input "dog" into the new Movie and it would print. With getters and setters you can solve this. 

        
        echo $avengers->getRating() . "<br>";

    ?>
    

</body>
</html>