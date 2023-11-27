<!-- simple_validation.php -->

<?php
function checkWord($input, $letter){
   if ($_SERVER["REQUEST_METHOD"] === "POST" && strtolower($input[0]) !== $letter) {
    return "* This word must start with the letter ${letter}!";
   } else {
     return "";}
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Validation</title>
</head>

<body>
    <main>
        <section>
            <h1>Time to Practice our ABC's</h1>
            <form method="post" action="">
                <label for="a-word">Enter a word that starts with the letter "a": </label>
                <input type="text" name="a-word" id="a-word" value=<?= $_POST["a-word"];?>>
                <p class="error" id="a-error"><?= checkWord($_POST["a-word"], "a");?></p>
                <br>
                <label for="b-word">Enter a word that starts with the letter "b": </label>
                <input type="text" id="b-word" name="b-word" value=<?= $_POST["b-word"];?>>
                <p class="error" id="b-error"><?= checkWord($_POST["b-word"], "b");?></p>
                <br>
                <label for="c-word">Enter a word that starts with the letter "c": </label>
                <input type="text" id="c-word" name="c-word" value=<?= $_POST["c-word"];?>>
                <p class="error" id="c-error"><?= checkWord($_POST["c-word"], "c");?></p>
                <br><br>
                <input type="submit" value="Submit Words">
            </form>
        </section>
        <section>
            <h3>"a" is for: <?= $_POST["a-word"];?><h3>
            <h3>"b" is for: <?= $_POST["b-word"];?><h3>
            <h3>"c" is for: <?= $_POST["c-word"];?><h3>
        </section>
    </main>
</body>

</html>

