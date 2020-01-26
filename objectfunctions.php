<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object Functions</title>
</head>
<body>
    
    <!--
    
    -->    

    <?php

        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            //This is an object function or a method in js.
            function hasHonors() {
                if ($this->gpa >= 3.5) {
                    echo "$this->name is on the honor role! <br>";
                } else {
                    echo "$this->name is not on the honor role. <br>";
                }
            }
        }

        $student1 = new Student("Alexander", "HRIM", 3.6);
        $student2 = new Student("Ioanna", "ID", 2.6);

        echo $student1->hasHonors();
        echo $student2->hasHonors();

    ?>
    

</body>
</html>