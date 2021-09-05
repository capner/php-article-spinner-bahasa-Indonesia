<?php


$string = "

Bagi yang merasa kesulitan membangun game apk dari aplikasi max2d game engine berikut adalah langkah langkahnya.


Max2d game engine adalah sebuah aplikasi android, semacam IDE untuk membuat sebuah game 2d atau game platformer seperti super mario bros, flappy bird, metal slug dsb. 


Namun kita tidak bisa secara langsung membuild game yang kita buat menjadi apk di max2d game engine dan harus menggunakan layanan pihak ketiga.


Berikut adalah cara membuild apk dari max2d game engine.



Buat Repository


Pertama tama kita harus buat dulu sebuah repository dari game yang kita buat. Repository adalah semacam file file asset dari project kita yang dapat di git . Disimpan di server dan dapat diimport, atau berkolaborasi dengan platform atau programmer lain. Pada max2d pilih project game yang akan kita buat apk. Pada menu pilih create repository dan kita akan mendapatkan link repository yang tercopy otomatis di clipboard.



Buka web codemagic.io


Sekarang buka website codemagic.io jika belum punya akun maka buat akun dulu, pilih subscription yang gratis. Jika sudah buat akun dan login. Lalu pilih menu app, lalu buat aplikasi baru. Pilih sumber repository nya yang other, (pilihan ada github, gitlab) tapi pilih yang other. Lalu sumber repository kita pastekan link repository yang didapat dari max2d. Pilih aplikasi nya pilih yang flutter. Setelah itu pilih next. 


Workflow flutter.yaml


Pada pilihan workflow jangan gunakan default tapi pilih flutter.yaml


Lalu tekan start build, dan tunggu prosesnya sekitar 5 menit. Bisa anda pantau proses. Setelah selesai, apk nya sudah bisa anda download pada menu artefact.



";
echo '<b>string asli: </b>' . $string .'<br>';


echo '
<br><br><b>
string hasil spin : </b>';

$array_per_kalimat = explode('.',$string);

//echo var_dump($array_per_kalimat);

$count_array_per_kalimat = count($array_per_kalimat);

for($h=0;$h < $count_array_per_kalimat;$h++){


$kalimat = $array_per_kalimat[$h];

$array_string = explode(' ',$kalimat);

$count_array_string = count($array_string);

for ($i=0;$i<$count_array_string;$i++){
$test = $array_string[$i];
if (preg_match('/(me)\w+/',$test)){
//echo 'true';
$index_predikat = $i;
} else {
//echo 'false';
}

}
echo '. ';

$ucfirst = 'true';

for ($i=($index_predikat+1);$i<$count_array_string;$i++){
if ($ucfirst == 'true' ){
echo ucfirst($array_string[$i]).' ';
$ucfirst = 'false';
} else {
echo $array_string[$i].' ';
}
}


echo preg_replace('/(me)/','di',$array_string[$index_predikat]).' ';

for ($i=0;$i<$index_predikat;$i++){

echo $array_string[$i].' ';

}
}
?>