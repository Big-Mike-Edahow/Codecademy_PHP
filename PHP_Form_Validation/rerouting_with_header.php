<!-- rerouting_with_header.php -->

<?php
$validation_error = "";
$username = "";
$users = ["coolBro123" => "password123!", "coderKid" => "pa55w0rd*", "dogWalker" => "ais1eofdog$"];

 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password  = $_POST["password"];
    if (isset($users[$username]) && $users[$username] === $password){
        header("Location: success.html");
        exit; } 
    else {
        $validation_error = "* Incorrect username or password.";}
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
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
                <br>
                <span class="error"><?= $validation_error;?></span>
                <br><br>
                <input type="submit" value="Log in">
            </form>
        </section>
    </main>
</body>

</html>

