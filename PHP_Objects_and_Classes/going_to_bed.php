<!-- going_to_bed.php -->

<?php

class StringUtilities {
  public static function secondCase($string){ 
    $string = strtolower($string);

    if (strlen($string) >= 2) {
      $string[1] = strtoupper($string[1]);
    }

    return $string;  
  }
}

class Pajamas {
  private $owner, $fit, $color;
  function __construct($owner = "nobody", $fit = "nice", $color = "blue"){
    $this->owner = StringUtilities::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe(){
    return "$this->owner's $this->color pajamas fit $this->fit.";
  }
}

$chicken_PJs = new Pajamas("CHICKEN", "just right", "orange");
echo $chicken_PJs->describe();

