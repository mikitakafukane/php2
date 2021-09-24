<?php
$color = ['黒', '白', '赤'];

// echo $color[0];
// echo "\n";
// echo $color[1];
// echo "\n";
// echo $color[2];

//for (初期値、　繰り返し条件、　更新処理)
for ($i=0; $i<count($color); $i++){
  echo '・', $color[$i], "\n";
}
