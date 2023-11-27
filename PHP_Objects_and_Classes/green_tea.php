<!-- green_tea.php -->

<?php
class Beverage {
  public $beverage, $temperature, $color, $opacity;
}

$tea = new Beverage();
$tea->beverage = "tea";
$tea->temperature = "hot";
$tea->color = "green";
$tea->opacity = "dark";

echo "This morning's beverage is: " . $tea->temperature . ", "
     . $tea->opacity . ", " . $tea->color . " " . $tea->beverage .  ".";

?>

