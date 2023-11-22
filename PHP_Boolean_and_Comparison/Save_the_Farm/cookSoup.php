<?php
// cookSoup.php

function cookSoup(){
	// Write your code here:
  global $location, $has_mushrooms, $has_soup, $is_hungry;
  # Check if player is in the kitchen and got mushrooms
  if (!($location === "kitchen" && $has_mushrooms))
  {
    echo "You can't cook like this! You need something to cook AND to be in the kitchen.\n";
    }
    # If he got mushrooms, than cook soup and take mushrooms from inventory
  else
  {
    echo "You made some mushroom soup. Mushroom is the queen of all soups!\n";
    $has_mushrooms = false;
    $has_soup = true;
  }
  }
  ?>

  