<?php

function magic8Ball() {
  echo "\nTell me...what is your question?\n";

  $question = readline(">>");

  echo "\nHmm I see...Your question is:\n{$question}\n\nHere is the answer to your question:\n";

  $choice = rand(0, 9);

  if ($choice === 0){
    echo "It is certain.\n";
  }
  elseif ($choice === 1) {
    echo "It is decidedly so.\n";
  }
  elseif ($choice === 2) {
    echo "Without a doubt.\n";
  }
  elseif ($choice === 3) {
    echo "Yes - definitely.\n";
  }
  elseif ($choice === 4) {
    echo "You may rely on it.\n";
  }
  elseif ($choice === 5) {
    echo "As I see it, yes.\n";
  }
  elseif ($choice === 6) {
    echo "Most likely.\n";
  }
  elseif ($choice === 7) {
    echo "Outlook good.\n";
  }
  elseif ($choice === 8) {
    echo "Yes.\n";
  }
  elseif ($choice === 9) {
    echo "Signs point to yes.\n";
  }
  else {
    echo "Reply hazy, try again.";
  }
}

magic8Ball();
?>
