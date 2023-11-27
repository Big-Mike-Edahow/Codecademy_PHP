<!-- filter_var_options.php -->

<?php
$message = "";
$month_error = "";
$day_error = "";
$year_error = "";
  
// Create your variables here:
$month_options = ["options" => ["min_range" => 1, "max_range" => 12]]; 
$day_options = ["options" => ["min_range" => 1, "max_range" => 31]]; 
$year_options = ["options" => ["min_range" => 1903, "max_range" => date("Y")]];

// Define your function here:
function validateInput($type, &$error, $options_arr){
    if (!filter_var($_POST[$type], FILTER_VALIDATE_INT, $options_arr)) {
      $error = "* Invalid ${type}";
      return FALSE;
  } else {
      return TRUE;
    } 
}

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Uncomment the code below:
    $test_month = validateInput("month", $month_error, $month_options);
    $test_day = validateInput("day", $day_error, $day_options);
    $test_year = validateInput("year", $year_error, $year_options);    
    if ($test_month && $test_day && $test_year){
      $message = "Your birthday is: {$_POST["month"]}/{$_POST["day"]}/{$_POST["year"]}";}
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Var Options</title>
</head>

<body>
    <main>
        <section>
            <form method="post" action="">
                <h4>Enter your birthday:</h4>
                <label for="month">Month: </label>
                <input type="number" name="month" value="<?= $_POST["month"];?>">
                <span class="error"><?= $month_error;?></span>
                <br>
                <label for="day">Day: </label>
                <input type="number" name="day" value="<?= $_POST["day"];?>">
                <span class="error"><?= $day_error;?></span>
                <br>
                <label for="year">Year: </label>
                <input type="number" name="year" value="<?= $_POST["year"];?>">
                <span class="error"><?= $year_error;?></span>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </section>
        <section>
            <p><?= $message;?></p>
        </section>
    </main>
</body>

</html>

