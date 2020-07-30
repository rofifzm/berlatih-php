<?php
function tentukan_deret_geometri($arr) {
// kode di sini
//sama dengan deret aritmatika
// bedanya hanya bukan mencari selisih namun mencari sisa bagi
//bila sisa bagi bukan 0 maka bukan deret geometri
$p_array=count($arr);


$hasil=[];
for ($i=0;$i<$p_array;$i++){
    
    
    if ($i==0) {
        $hasil[]=$arr[$i];
       
        continue;
    }
    $hasil[]=$arr[$i]%$arr[$i-1];
    
    if ($hasil[$i]!=0){
       return "false";
    }  
    
  
    
    
   
}  
return "true";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); 
echo "<br>"; // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); 
echo "<br>"; // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo "<br>";
echo tentukan_deret_geometri([2, 6, 18, 54]); 
echo "<br>";// true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); 
echo "<br>";//false
?>