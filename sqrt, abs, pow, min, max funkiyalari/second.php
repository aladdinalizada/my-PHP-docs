<?php
$reqem1 = 10;
$reqem2 = 20;

//  +, - , /, * emelleri

$cem = $reqem1 + $reqem2;
$ferq = $reqem1 - $reqem2;
$bolme = $reqem2 / $reqem1;
$vurma = $reqem1 * $reqem2;
$qaliq = $reqem2 % $reqem1;

// qisa yolla yazilisi
$reqem1 += 33;
$reqem2 += 15;

$reqem1 -= 33;
$reqem2 -= 15;

$reqem1 /= 33;
$reqem2 /= 15;

$reqem1 *= 33;
$reqem2 *= 15;

$reqem1 %= 33;
$reqem2 %= 15;

// echo("$reqem1 <br> $reqem2")

// Reqemin kokunu tapmaq ucun sqrt-dan istifade edirik
$reqem3 = 16;
echo " 16-nin koku: ".sqrt($reqem3)."<br>";

// Ededin kvadrat kokunun tapilmasi ucun pow-dan istifade edirik
echo "4 ededinin kvadrati: ".pow(4,2)."<br>";

// abs
echo abs(-3)."<br>";
// min
echo "en kicik reqem: ".min(2, 4, 6, 8, 10)."<br>";
// max
echo "en boyuk reqem: ".max(2, 4, 6, 8, 10)."<br>";

?>