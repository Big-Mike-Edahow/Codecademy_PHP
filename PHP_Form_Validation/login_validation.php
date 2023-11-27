<!-- login_validation.php -->

<?php
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];
$feedback = "";
$message = "You're logged in!";
$validation_error = "* Incorrect username or password.";
$username = "";

// Write your code here:
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"];
   $password  = $_POST["password"];
   if (isset($users[$username]) && $users[$username] === $password){
     $feedback = $message;
   } else {
     $feedback = $validation_error;
   }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Validation</title>
</head>

<body>
    <main>
        <section>
            <h3>Welcome back!</h3>
        </section>
        <section>
            <form method="post" action="">
                <label for="username">Username: </label>
                <input type="text" name="username" value="<?php echo $username;?>">
                <br>
                <label for="password">Password: </label>
                <input type="text" name="password" value="">
                <br><br>
                <input type="submit" value="Log in">
            </form>
        </section>
        <section>
            <span class="feedback"><?= $feedback;?></span>
        </section>
    </main>
</body>

</html>

