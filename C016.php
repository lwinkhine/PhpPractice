<?php
$s = fgets(STDIN);
$trans = array("A" => "4", "B" => "8", "E" => "3","G" => "6","I" => "1","O" => "0","T" => "7","Z" => "2");
echo strtr($s, $trans);
?>
