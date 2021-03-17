<?php

// include data-kpu.php
require('data-kpu.php');

echo "masuk";
$nik = '1871022109990004';
	
// menjalankan proses curl dan return array
$data = cek_ktp($nik);
// print_r($data);
	
// merubah data array menjadi json
echo json_encode($data);
	
?>
