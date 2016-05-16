<?php
$input_lines = fgets(STDIN);
$val = explode(" ",$input_lines);


$a = 4;

$hyomen = 6*(pow($a,2));



if ($a>=1 or $a<=20){
echo $hyomen." \n";
}

?>
