<!-- filter_var_sanitizing.php -->

<?php
$validation_error = "";
$user_answer = "";
$submission_response = "";

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$user_answer = filter_var($_POST["answer"], FILTER_SANITIZE_NUMBER_INT);
  	if ($user_answer != "-5"){
    	$validation_error = "* Wrong answer. Try again.";
  	} else {
      $submission_response = "Correct!";}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Var Sanitizing</title>
</head>

<body>
    <main>
        <section>
            <h2>Time for a math quiz!</h2>
        </section>
        <section>
            <form method="post" action="">
                <h4>Question 1:</h4>
                <p>What is 6 - 11?</p>
                <input type="text" name="answer" id="answer" value="<?= $user_answer;?>">
                <br>
                <span class="error" id="error"><?= $validation_error;?></span>
                <br>
                <input type="submit" value="Submit Your Answer">
            </form>
        </section>
        <section>
            <p id="answer-display">Your answer was: <?= $user_answer;?></p>
            <p id="submission-response"><?= $submission_response;?></p>
        </section>
    </main>
</body>

</html>

