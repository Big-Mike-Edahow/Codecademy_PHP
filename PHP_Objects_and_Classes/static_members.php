<!-- static_members.php -->

<?php

class AdamsUtils {
  public static $the_answer = 42;
  public static function addTowel($string) {
    return $string . " and a towel.";
  }
}

$items = "I brought apples";
echo AdamsUtils::$the_answer;
echo "\n";
echo AdamsUtils::addTowel($items);
?>

