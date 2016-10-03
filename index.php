<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <h1>this is my first webpage</h1>
        <h2>Scott Learmonth</h2>

        <?php
            $myArray = array("do", "re", "mi"); // declares the array
            echo $myArray[0]; // outputs "do"
            $myArray[1] = "la"; // modifies position 1 (re)
            echo $myArray[1]; // outputs "la"
            unset($array[2]); // removes the array in position 2
        ?>
    </body>
</html>