<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inheretance</title>
</head>
<body>
    
    <!--

    -->    

    <?php

        class Chef {

            function makeChicken() {
                echo "The Chef Makes Chicken <br>";
            }

            function makeSalad() {
                echo "The Chef Makes Salad <br>";
            }

            function makesSpecialDish() {
                echo "The Chef Makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef {

            function makePasta() {
                echo "The Chef Makes a Mean Bowl Of Pasta <br>";
            }

            //How to override a function from the chef class which we extended from. It's simple, just rewrite the function with different code. 
            function makesSpecialDish() {
                echo "The chef made delicious chicken parm! <br>";
            }

        }

        $chef = new Chef();
        $chef->makesSpecialDish();

        $italianChef = new ItalianChef();
        $italianChef->makesSpecialDish();
        $italianChef->makePasta();
    ?>
    

</body>
</html>