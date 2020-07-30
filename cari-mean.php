<?php

function cari_mean($arr){
//kode di sini
$p_array=count($arr);
$sum=0;
for ($i=0;$i<$p_array;$i++){
    $sum+=$arr[$i];
} 
$mean = $sum/$p_array;
$mean = round($mean);
return $mean;
}

//TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]);
echo "<br>"; // 3
echo cari_mean([3, 5, 7, 5, 3]);
echo "<br>"; // 5
echo cari_mean([6, 5, 4, 7, 3]);
echo "<br>"; // 5
echo cari_mean([1, 3, 3]);
echo "<br>"; // 2
echo cari_mean([7, 7, 7, 7, 7]);
echo "<br>"; // 7

?>