<?php
$color = ['黒', '白', '','赤',];

foreach($color as $color_name) {
  if ($color_name === ''){
    continue;
  }
  echo $color_name, "\n";
}
