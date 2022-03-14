<h2>Program 26 : Check Whether a Scanned Character is Vowels or Consonant</h2>
<form method="post">
    <label for="txt">Enter Vowels and Consonant : </label>
    <input type="text" maxlength="1" name="char" id="txt" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    $char = $_POST["char"];
    if( ($char == "a") || 
        ($char == "e") || 
        ($char == "i") || 
        ($char == "o") || 
        ($char == "u") || 
        ($char == "A") ||
        ($char == "E") || 
        ($char == "I") || 
        ($char == "O") || 
        ($char == "U"))
        echo "Entered Charactor '$char' is Vowel";	
    // else if($char == "e")
    //     echo "Entered Charactor '$char' is Vowel"; 
    // else if($char == "i")	   
    //     echo "Entered Charactor '$char' is Vowel";		
    // else if($char == "o")		   
    //     echo "Entered Charactor '$char' is Vowel";	  	
    // else if($char == "u")		   
    //     echo "Entered Charactor '$char' is Vowel";	 	
    else			
        echo "Entered Charactor '$char' is Consonent";	
}
?>