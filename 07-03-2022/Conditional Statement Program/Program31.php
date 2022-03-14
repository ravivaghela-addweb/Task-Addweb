<h2>Program 31 : Print the Name of Colors Starting with the Scanned Character</h2>
<form method="post">
    <label for="char">Enter first Charactor of Color Name : </label>
    <input type="text" name="txt" id="char" required /><br />
    <input type="submit" value="Get Color Name" name="submit" />
</form>
<?php
if (isset($_POST["submit"])) {
    $txt = $_POST["txt"];

    if ($txt == 'g' || $txt == 'G')
        echo "$txt Stands for Green Color";
    else if ($txt == 'w' || $txt == 'W')
        echo "$txt Stands for White Color";
    else
        echo "$txt Not a Valid Color";
}
?>