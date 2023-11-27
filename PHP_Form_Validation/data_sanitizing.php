<!-- data_sanitizing.php -->

<?php
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];  
$message = "";
$validation_error = "* Please enter a 10-digit North American phone number.";
$name = "";
$number = "";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $number  = $_POST["number"];
   // Write your code here:
   if (strlen($number)<30){
     $formatted_number = preg_replace("/[^0-9]/", "", $number);
     if (strlen($formatted_number)===10){
       $contacts[$name] = $formatted_number;
       $message = "Thanks ${name}, we'll be in touch.";
     } else {
       $message = $validation_error;
     } 
   } else {
     $message = $validation_error;}
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sanitizing</title>
</head>

<body>
    <main>
        <section>
            <h3>Contact Form:</h3>
        </section>
        <section>
            <form method="post" action="">
                <label for="name">Name: </label>
                <input type="text" name="name" value="<?= $name;?>">
                <br>
                <label for="number">Phone Number: </label>
                <input type="text" name="number" value="<?= $number;?>">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section id="form-output">
            <p id="response"><?= $message?></p>
        </section>
    </main>
</body>

</html>

