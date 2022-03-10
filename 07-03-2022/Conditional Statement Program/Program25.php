<h2>Program 25 : Check Whether a Scanned Character is a Digit, an Alphabet or a Special Character.</h2>
<form method="post">
    <label for="txt">Enter Character, Number, Special Character :</label>
    <input type="text" name="txt" id="txt" required /><br />
    <input type="submit" value="Check" name="submit" />
</form>
<?php
if (isset($_POST["submit"]))
{
    $txt = $_POST["txt"];
    if ($txt >= 65 && $txt <= 90)
        echo "$txt is Capital Alphabet ";
    else if ($txt >= 97 && $txt <= 122)
        echo "$txt is Small Alphabet ";
    else if ($txt >= 48 && $txt <= 57)
        echo "$txt is Digit ";
    else
        echo "$txt is Special Character ";
}
?>