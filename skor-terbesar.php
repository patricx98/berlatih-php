<?php
function skor_terbesar($arr){
  $panjang = count($arr);
  $kelas = array();
  $data = array();
  $nilaiNew = 0;
  $nilaiOld = 0;
  for($i = 0; $i < $panjang; $i++){
    array_push($kelas,$arr[$i]['kelas']);
  }
  $kelas = array_unique($kelas);
  $kelas = array_values($kelas);
  for($i=0; $i < count($kelas); $i++){
    for($j=0; $j < $panjang; $j++){
      if($arr[$j]['kelas'] == $kelas[$i]){
        $nilaiNew = $arr[$j]['nilai'];
        if($nilaiNew > $nilaiOld){
          $nama = $arr[$j]['nama'];
          $nilaiOld = $nilaiNew;
        }
      }
    }
    array_push($data, (array($kelas[$i] => array('nama' => $nama, 'kelas' => $kelas[$i], 'nilai' => $nilaiOld))));
    $nilaiOld = 0;
  }
  print_r($data);
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