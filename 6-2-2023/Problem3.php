<html>
    <h3>Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.
Conditions:
You can pass 1 to 7 number in switch
Day 1 will be considered as Monday
If number is not between 1 to 7, show invalid number in default</h3>
    <?php
    $day = 5;
    switch($day){
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid Number!";
    }
    ?>
</html>