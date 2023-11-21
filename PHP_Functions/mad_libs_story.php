<?php
function generateStory($noun, $verb, $color) {
  return $story = "\nThe {$noun} are lovely, {$color} and deep.\n
  But I have promises to keep,\nAnd miles to go before I go {$verb},\n
  And miles to go before I sleep.\n";}

echo generateStory("oceans", "fishing", "blue");
echo generateStory("forests", "hunting", "green");
echo generateStory("plains", "exploring", "brown");
?>

