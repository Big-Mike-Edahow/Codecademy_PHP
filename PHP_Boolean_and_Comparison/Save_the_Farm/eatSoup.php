<?php
// eatSoup.php

function eatSoup(){
	// Write your code here:
  global $has_soup, $is_hungry;
  // check if the player got soup
  if (!$has_soup)
  {
    echo "You don't have any cooked food to eat!\n";
  }
  else
  // if he does, then assign variables to negative.
  {
    echo "You have eaten the soup!\n";
    $has_soup = false;
    $is_hungry = false;
  }
}
?>

