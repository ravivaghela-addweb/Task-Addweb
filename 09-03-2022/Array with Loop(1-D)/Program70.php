<h2>Program 70 : Scan and Print an Array (an Integer and a Character) </h2>
<?php
    $names = array("Ravi", "Jinal", "Nidhi", "Aaqib", "Ganshyam");
    $numbers = array(07, 11, 19 ,99, 10, 07, 19, 98);
    echo "Array of Charactors : ";
    foreach($names as $name)
    {
        echo "$name, ";
    }
    echo "<br/>";
    echo "Array of Numbers : ";
    foreach($numbers as $number)
    {
        echo "$number, ";
        
    }
?>