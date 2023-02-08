<html>
    <body>
        <h3>Write a Program to create given pattern with * using for loop<br>
        *<br>
        **<br>
        ***<br>
        ****<br>
        *****<br>
        ******<br>
        *******<br>
        ********<br>
        </h3>
    </body>
</html>
<?php
for($i=0;$i<=7;$i++){
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo("<br>");
}
?>
