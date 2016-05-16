<?php


    $input_lines = fgets(STDIN);
    $number = explode(" ", $input_lines);
    $n=$number[0];
    $s=$number[1];
    $result1 = $n*1000000;
    $result2 = $n*1000;
    $result3 =$n*10;

    if(strpos($s,'km') !== false){
    echo $result1;
    }
    elseif(strpos($s,'m') !== false){
     echo $result2;
    }
    else{
     echo $result3;
    }

?>
