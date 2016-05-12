
<?php
$string = "science university";


function initials($str) {
    $e = '';
    foreach (explode(' ', $str) as $word)
        $e .= strtoupper($word[0]);
    return $e;
}

echo initials($string);

?>
