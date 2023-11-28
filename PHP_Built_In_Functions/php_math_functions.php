<?php
// The Hitchhiker's guide to PHP math functions

$initial = '555';
$a = octdec($initial);
echo $a;

// To convert to degrees we times by pi/180
function convertToRadians($a)
{
    $bConVersion = $a * (pi() / 180);
    return $bConVersion;
}
echo "\n";
$b = convertToRadians($a);
echo $b;

echo "\n";
$c = cos($b);
echo $c;
// Round to 3dp
$d = round($c, 3);
echo "\n";
echo $d;
// Taking natural log of $d
echo "\n";
$e = log($d);
echo $e;
// Absolute value of $e
$f = abs($e);
echo "\n";
echo $f;
// arc cosine of $f
$g = acos($f);
echo "\n";
echo $g;

// Convert back to degree
$h = rad2deg($g);
echo "\n";
echo $h;
// Floor the value in h
$i = floor($h);
echo "\n";
echo $i;
// Subtract 47 from $i to arrive at the solution, $j.
$j = $i - 47;
echo "\n";
echo $j;
