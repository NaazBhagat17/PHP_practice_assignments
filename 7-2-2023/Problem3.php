<html>
    <body>
        <p>3rd-To check if a year is leap year or not in
        $my_year = 2023;</p>
    </body>
</html>
<?php
    $my_year = 2023;
    if($my_year % 4 == 0){
        if($my_year % 100 == 0){
            if($my_year % 400 == 0){
                echo true . $my_year." is a Leap year.";
            }
            else{
                echo false . $my_year." is not a Leap year.";
            }
        }
    }
    else{
        echo false . $my_year." is not a Leap year.";
    }
?>