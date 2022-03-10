<h2>Program 26 : Check Whether a Scanned Character is Vowels or Consonant</h2>
<form method="post">
    <label for="txt">Enter Vowels and Consonant : </label>
    <input type="text" name="txt" id="txt" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    $x = $_POST["txt"];
    echo "Your Entered Charactor : $x<br/>";
    $l = 0;
    $u = 0;

    if ($x && ctype_alpha($x)) {

        $l = $x == 'a' || $x == 'e' || $x == 'i' || $x == 'o' || $x == 'u';
        $u = $x == 'A' || $x == 'E' || $x == 'I' || $x == 'O' || $x == 'U';

        if ($l || $u)
            echo "'" . $x . "' is a Vowel Character.\n";
        else
            echo "'" . $x . "' is a Consonant Character.\n";
    } else {
        echo "Sorry, You entered Non-Alphabetic character!\n";
    }
}
?>