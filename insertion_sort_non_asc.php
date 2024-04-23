<?php

$arrangement = [5,2,4,6,1,3];
echo "<pre>";
print_r($arrangement);
$size = count($arrangement);

for ($j=1; $j < $size ; $j++) {
    $key = $arrangement[$j];//6
    //insert $arrangement into the non asc ordered sequence $arrangement[1..j-1]
    $i = $j -1;//2
    while ($i>=0 && $arrangement[$i] < $key) {
        $arrangement[$i+1] = $arrangement[$i];
        $i = $i - 1;
    }

    $arrangement[$i+1] = $key;
    echo "<pre>";
    print_r($arrangement);

}

echo "<br>";
print_r($arrangement);

?>