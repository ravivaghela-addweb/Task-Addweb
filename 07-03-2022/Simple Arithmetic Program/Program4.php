<?php

    echo "Program 4 :- Calculate the Area of a Circle while the Circumference is given <br />";
    echo "Radius = 7 <br /> Circumference = 7<br />";
    define("PI",3.14159);
    $circumference = 7;
    $radius = 7;
    $area = $circumference ** 2 / (4 * PI);

    echo "Area Of Circle : ".$area;

?>