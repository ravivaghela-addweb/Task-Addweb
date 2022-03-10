<h2>Program 35 : Check Whether Scanned Character is a Vowel or a Consonant</h2>
<form method="post">
    <label for="char">Enter Charactor : </label>
    <input type="text" name="txt" id="char" required /><br />
    <input type="submit" value="Submit" name="submit" />
</form>
<?php
if (isset($_POST['submit'])) {
    $ch = $_POST['txt'];
    switch ($ch) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            echo "Charactor '$ch' is Vowel";
            break;
        default:
            echo "Charactor '$ch' is Consonant";
    }
}
?>