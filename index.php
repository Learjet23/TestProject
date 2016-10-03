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
        $name = "Simon";
        if ($name == "Simon") {
            print "I know you!";
        }
        else {
            print "Who are you?";
        }

        $numberOfHobbits = 2;
        switch ($numberOfHobbits) {
            case 1:
                echo "1 sad hobbit";
                break;
            case 2:
                echo "2 happy hobbits";
                break;
            case 3:
                echo "3 hobbits are a crowd";
                break;
            default:
                echo "All the hobbits have gone home";
        }

        ?>
    </body>
</html>