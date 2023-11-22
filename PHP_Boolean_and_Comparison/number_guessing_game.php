<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm thinking of a number between 1 and 10.\n";
echo "We'll play 5 rounds. Can you guess it?\n";

function guessNumber()
{
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count++;
  $num = rand(1, 10);

  echo "\nMake your guess...\n";
  $guess = readline(">> ");
  $guess = intval($guess);

  echo "\n*** Round: $play_count ***\nMy Number: $num\nYour guess: $guess";

  if ($guess === $num) {
    $correct_guesses++;
  }
  if ($guess > $num) {
    $guess_high++;
  }
  if ($guess < $num) {
    $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

echo "\n\n*** Final Stats ***";
$percent_correct = $correct_guesses/$play_count * 100;
echo "\nYou guessed correctly $percent_correct% of the time.\n";

if ($guess_high > $guess_low){
    echo "Your wrong guesses tended to guess high.";}
else if ($guess_high < $guess_low) {
    echo "Your wrong guesses tended to guess low.";}

echo "\n";
?>

