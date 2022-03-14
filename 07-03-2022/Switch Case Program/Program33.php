<h2>Program 33 : Print the Name of Colors Starting with the Scanned Character</h2>
<form method="post">
    <label for="char">Enter first Charactor of Color Name : </label>
    <input type="text" name="txt" id="char" required /><br />
    <input type="submit" value="Get Color Name" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) 
{
    $txt = $_POST["txt"];
    // echo "Entered Color Charactor : $txt<br/>";
    switch ($txt) {
        case 'g' :
        case 'G':
            echo ("$txt Character Match Green Color");
            break;
        case 'w' :
        case 'W':
            echo ("$txt Charator Match White Color");
            break;
        default:
            echo ("$txt Charactor is did not Match");
    }
}
?>