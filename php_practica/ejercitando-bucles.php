<?php


// $random = rand(0,100);

// for ($i=0; $i <= $random; $i++) { 
//     echo $i . "<br>";
// }
// $a = 100;
// while ($a >= 85) {
//      echo $a-- . "<br>";
// };
$cara = 0;
$tiros = 0;

while($cara<5){
    $random = rand(0,1);
    $tiros++;
    if($random == 0){
        $cara++;
    }


}

echo "salio $cara veces cara y se tiro $tiros veces el dado";





?>