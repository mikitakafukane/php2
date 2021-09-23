<?php
$color = ['黒', '白', '赤'];
// echo count($color);

// array_push($color, '緑', '黃');
// $color[] = '緑';
// $color[] = '黃';

// $mycolor = array_shift($color);
// echo $mycolor;

$color_string = implode(',', $color);
$color_string .= ',緑,黃';
$newarray = explode(',', $color_string);

print($color_string);
print_r($newarray);
