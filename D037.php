<?php


$M = fgets(STDIN);
$N = fgets(STDIN);
$M = 5;
$N = 30;
$a=floor($N/$M);
if($N%$M!==0){
    echo ++$a;
}
else{
    echo $a;
}


?>
