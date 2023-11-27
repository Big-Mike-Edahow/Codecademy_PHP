<!-- basic_data_sanitizing.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Data Sanitizing</title>
</head>

<body>
    <main>
        <section>
            <form method="post" action="">
                <label for="html">Enter some HTML: </label>
                <input type="text" name="html">
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section>
            <h3>You entered: </h3>
            <p><?= htmlspecialchars($_POST["html"]) ?></p>
        </section>
    </main>
</body>

</html>

