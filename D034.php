<?php

$input_lines = trim(fgets(STDIN));
$n =21;
 if ($n%$input_lines == 0){
        echo $input_lines;
    }
    else{

    echo fmod($n,$input_lines)."\n";
}
?>
