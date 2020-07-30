<?php
function skor_terbesar($arr){
//kode di sini
//buat array penyimpanan baru
//tes array utk menyimpan per kelas
//ambil dari variabel kelas
//bila kelas sama bandingkan nilainya
//ambil yang terbesar
$hasil=[];
$kelas=[];
$nama=[];
$hasil2=[];

  foreach ($arr as $key => $value ){
    
   
   $kelas[]=$arr[$key]['kelas']; 
   $kelas = array_unique($kelas); 
   

}   
  

return $kelas;
  


  


}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>