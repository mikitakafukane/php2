<?php
$gender = '男性';
$age = 21;

// if ($gender == '男性'){
//   if ($age == 20){
//     echo '男性で20歳ですね？';
//   }
// }

// if ($gender == '男性' && $age == 20){
//   echo '男性で20歳ですね？';
// }

// if ($gender == '男性' || $age == 20){
//   echo '男性で20歳ですね？';
// }

if ($gender == '男性' xor $age == 20){
  echo '20歳ではない男性か、20歳の女性ですね？';
}