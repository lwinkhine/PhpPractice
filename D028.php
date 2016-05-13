<?php
function count_digit($n) {
return strlen((string) $n);
}


$n = 5800;
$number_of_digits = count_digit($n);
if($n >= 0 and $n <= 10000){
echo $number_of_digits;
}

?>
