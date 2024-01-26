<?php
//tinh tong tu 1 den 100
$tong = 0;
for($i = 0; $i <= 100; $i++){
    $tong += $i;
}
echo "i: $i <br>";
echo "tong: $tong";
echo "<br>";
$tong = 0;
for($i = 0; $i <= 100; $i++){
    if($i > 50) break;
    $tong += $i;
}
echo "i: $i <br>";
echo "tong: $tong";
echo "<br>";
$tong = 0;
for($i = 0; $i <= 100; $i++){
    if($i > 50) continue;
    $tong += $i;
}
echo "i: $i <br>";
echo "tong: $tong";
echo "<br>";
$colors = array('red', 'green', 'blue', 'yellow');
foreach($colors as $value){
    echo "$value <br>";
}
for($i=0; $i < count($colors); $i++){
    echo "$colors[$i] <br>";
}
?>