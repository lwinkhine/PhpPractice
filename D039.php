<?php
$input_lines1 = trim(fgets(STDIN));
$input_lines2 = trim(fgets(STDIN));
$input_lines3 = trim(fgets(STDIN));
    $a = $input_lines1;
    $b = $input_lines2;
    $c = $input_lines3;
    if ($a == $b and $a == $c){
        echo "YES";
    }
    else{
        echo "NO";
    }



?>
