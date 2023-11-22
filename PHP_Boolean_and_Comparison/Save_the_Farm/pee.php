<?php
// pee.php
  
function pee(){
	// Write your code here:
  global $location, $needs_to_pee;
  if ($location ==="bathroom" Xor $location ==="woods")
  {
    echo "You relive yourself.\n";
    $needs_to_pee = false;
  }
  else 
  {
    echo "Are you crazy? You can't pee here!\n";
  }
  
}
?>

