<?php
function tentukan_deret_aritmatika($arr) {

//pseudocode
//1. Cek Panjang array
//2. looping untuk mengambil nilai array
//3. kurangkan nilai array saat ini dengan nilai array sebelumnya masukkan ke array hasil
//4. jika berbeda hasil pengurangannya maka hasil false
$p_array=count($arr);


$hasil=[];
for ($i=0;$i<$p_array;$i++){
    
    
    if ($i==0) {
        $hasil[]=$arr[$i];
       
        continue;
    }
    $hasil[]=$arr[$i]-$arr[$i-1];
    
    if ($hasil[$i]!=$hasil[$i-1]){
       return "false";
    }  
    
  
    
    
   
}  
return "true";

}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false 
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true 
echo "<br>";
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false 
echo "<br>";
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false 
echo "<br>";
?>