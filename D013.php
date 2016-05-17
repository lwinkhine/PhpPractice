<?php
$input_lines = trim(fgets(STDIN));
$a = explode(" ", $input_lines);

$m =$a[0];
$n =$a[1];


$b = $m%$n;
$c = fmod($m,$n);

echo ($b).''.($c);



?>
