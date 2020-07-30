<?php
function tukar_besar_kecil($string){
//pseudocode
//1. Ambil masing2 huruf menggunakan looping
//2. Cek apakah huruf besar atau kecil
//3. Bila kecil ubah jadi besar bila besar ubah jadi kecil

$p_string=strlen($string);

$arr_string=[];
$hasil=[];
for ($i=0;$i<$p_string;$i++) {
    $arr_string[]=$string[$i];
    if (ctype_upper($arr_string[$i])){
        $hasil[]=strtolower($arr_string[$i]);
        echo $hasil[$i];
    }
    else {
        $hasil[]=strtoupper($arr_string[$i]);
        echo $hasil[$i];
    }
}

}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>";
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay" 
echo "<br>";
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!" 
echo "<br>";
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME" 
echo "<br>";
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw" 
echo "<br>";

?>