<?php
$input_lines = fgets(STDIN);
   $s = explode(" ", $input_lines);
   $n = intval($s[1]) - 1;

   $a = substr($s[0], $n, 1);
   echo $a ."\n";


?>
