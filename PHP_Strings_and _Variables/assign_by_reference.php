<?php
// assign_by_reference.php
// Pointers

$very_bad_unclear_name = "15 chicken wings";

$order =& $very_bad_unclear_name; 
$order .= ", 1 cheeseburger";
$order .= ", 3 side salads";

echo "\nYour order is: $very_bad_unclear_name.";
?>

