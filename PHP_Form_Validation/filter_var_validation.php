<!-- filter_var_validation.php -->

<?php
$validation_error = "";
$user_url = "";
$form_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$user_url = $_POST["url"];
	if (!filter_var($user_url, FILTER_VALIDATE_URL)) {
    $validation_error = "* This is an invalid URL.";
    $form_message = "Please retry and submit your form again.";
  } else {
    $form_message = "Thank you for your submission.";
  } 
}  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Var Validation</title>
</head>

<body>
    <main>
        <section>
            <form method="post" action="">
                <label for="url">Your Favorite Website: </label>
                <input type="text" name="url" value="<?php echo $user_url;?>">
                <span class="error"><?= $validation_error;?></span>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section>
            <p> <?= $form_message;?> </p>
        </section>
    </main>
</body>

</html>

