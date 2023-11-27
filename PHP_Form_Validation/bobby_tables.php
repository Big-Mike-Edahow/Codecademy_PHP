<!-- bobby_tables.php -->

<?php
$name = "";
$character = "";
$email = "";
$birth_year = 1969;
$validation_error = "";
$existing_users = ["admin", "guest"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $character = $_POST["character"];
  $email = $_POST["email"];
  $birth_year = $_POST["birth_year"];
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bobby Tables</title>
</head>

<body>
    <main>
        <section>
            <h1>Create your profile</h1>
        </section>
        <section>
            <form method="post" action="">
                <label for="name">Select a name: </label>
                <input type="text" name="name" value="<?php echo $name;?>">
                <br>
                <label for="character">Select a character: </label>
                <input type="radio" name="character" value="wizard" <?php echo ($character=='wizard')?'checked':'' ?>>
                Wizard
                <input type="radio" name="character" value="mage" <?php echo ($character=='mage')?'checked':'' ?>> Mage
                <input type="radio" name="character" value="orc" <?php echo ($character=='orc')?'checked':'' ?>> Orc
                <br>
                <label for="email">Enter an email: </label>
                <input type="text" name="email" value="<?php echo $email;?>">
                <br>
                <label for="birth_year">Enter your birth year: </label>
                <input type="text" name="birth_year" value="<?php echo $birth_year;?>">
                <span style="color:red;"><?= $validation_error;?></span>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section>
            <h2>Preview:</h2>

            <?php
            $raw_name = trim(htmlspecialchars($_POST["name"]));
            if (in_array($raw_name, $existing_users)) {
            $validation_error .= "This name is taken. <br>";}
            else {
            $name = $raw_name;}
            ?>
            <p>Name: <?=$name?></p>

            <?php
            $raw_character = $_POST["character"];
            if (in_array($raw_character, ["wizard", "mage", "orc"])) {
            $character = $raw_character;}
            else {
            $validation_error .= "You must pick a wizard, mage, or orc. <br>";}
            ?>
            <p>Character Type: <?=$character;?></p>

            <?php
            $raw_email = $_POST["email"];
            if (filter_var($raw_email, FILTER_VALIDATE_EMAIL)){
            $email = $raw_email;} 
            else {
            $validation_error = "Invalid email. <br>";}
            ?>
            <p>Email: <?=$email;?></p>

            <?php
            $raw_birth_year = $_POST["birth_year"];
            $options = ["options" => ["min_range" => 1900, "max_range" => date("Y")]];
            if (filter_var($raw_birth_year, FILTER_VALIDATE_INT, $options)) {
            $birth_year = $raw_birth_year;}
            else {
            $validation_error .= "That can't be your birth year. <br>";}
            ?>
            <p>Age: <?=date("Y")-$birth_year;?></p>
        </section>
    </main>
</body>

</html>

