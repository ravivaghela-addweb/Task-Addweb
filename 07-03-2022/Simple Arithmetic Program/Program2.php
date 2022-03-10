<?php

    echo "Progarm 2 :- Calculate the Volume and Surface Area of a Sphere<br />";
    define("PI",3.14159);
    $radius = 07;
    $volume = (4 / 3) * PI * $radius ** 3;
    $surface = 4 * PI * $radius * $radius;

    echo "Volume Of Sphere : ".$volume ."<br />";
    echo "Surface Area Of Sphere :".$surface;

?>