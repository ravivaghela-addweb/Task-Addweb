<h2>Program 69 : Print the Pattern</h2>
<?php
    echo "<p>=========1==========</p>";
    for($i=1; $i<=4; $i++)	
    {	 
        for($j=1;$j<=$i; $j++)	  
        {	  	
            echo "$j ";	 
        }	  	
        echo "<br/>";   	
    }

    echo "<p>=========2==========</p>";

    for ($i=1; $i<=5; $i++)	
    {	 
        for($j=1;$j<=$i;$j++)	  
        {   	  	
            echo " * ";	 
        }	  	
        echo "<br/>";   	
    }  

    echo "<p>=========3==========</p>";

    $x=1;
    for($i=1; $i<=5; $i++)
    {
	    for($j=1; $j<=$i; $j++)
	    {
	        echo $x++." " ;	
	    }		
	    echo "<br>";
    }

    echo "<p>=========4==========</p>";
	
    for ($i=1; $i<=5; $i++)	
    {	 
        for($j=1;$j<=$i;$j++)	  
        {	  	
            echo $i." ";	 
        }	  	
        echo "<br/>";   	
    }  


?>