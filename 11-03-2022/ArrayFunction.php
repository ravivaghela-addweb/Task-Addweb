<h2>Program 82 : Array Function</h2>
<?php
    $names = array("Ravi","Jinal","Nidhi","Ghanshyam","Aaqib","Abc");
    $age = array(22, 24, 20, 19, 23, 25);
    $array = array("Ravi"=>22,"Jinal"=>24,"Nidhi"=>20,"Ghanshyam"=>19,"Aaqib"=>23,"Abc"=>25);
    echo "Number Array : [ ",implode(", ",$age)," ]"."<br/>";
    echo "<br/>";
    echo "Associative Array Using 'print_r()' Function : ";
    print_r($array);
    echo "<br/>";
    echo "<br/>";
    echo "Number Array Using 'print_r()' Function : ";
    print_r($age);
    echo "<br/>";
    echo "<br/>";
    echo "Associative Array Using 'var_dump()' Function : ";
    var_dump($array);
    echo "<br/>";
    echo "<br/>";
    echo "Ravi is ".$array['Ravi']." years old.";
    echo "<br/>";
    echo "<br/>";
    echo "Associative Array Convert into Uppercase Using 'array_change_key_case()' Function : ";
    print_r(array_change_key_case($array,CASE_UPPER));
    echo "<br/>";
    echo "<br/>";
    echo "Array Using 'array_chunk()' Function : ";
    print_r(array_chunk($names,2));
    echo "<br/>";
    echo "<br/>";
    echo "Associative Array Using 'array_chunk()' Function : ";
    print_r(array_chunk($array,2,true));
    echo "<br/>";
    echo "<br/>";
    $associativeArray = array_combine($names,$age);
    echo "Combine Two Array(names and age) and Print Assoicative Array : ";
    print_r($associativeArray);


?>