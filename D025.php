<?php
function count_digit($n){
return strlen((string) $n);
}


$n = 2;
$number_of_digits = count_digit($n);
$a = 00;
$b = 0;

$result1 = "{$a}{$n}";
$result2 = "{$b}{$n}";


if($number_of_digits == 1){
echo $result1;
}
elseif ($number_of_digits == 2) {
    echo $result2;
}elseif($number_of_digits == 3){
echo $n;
}
//else($number_of_digits > 4 || $number_of_digits == 4  ){
    //echo "<br \>";

//}

?>
