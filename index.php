<?php

// echo 'Halo Slur'."<br>";
// $hello = "Karisma";

// echo $hello."<br>";

// $nim = '12345';
// $nama = 'Thor';
// $sks = '3';
// $nilai = '82.5';

// $status = true;

// echo "NIM : ".$nim."<br>";
// echo "NAMA : ".$nama."<br>";
// echo ("Nilai : .3f<br>".$nilai);
// print ("SKS : ".$sks."<br>");
// print ("SKS : ".$sks."<br>".$nilai);
// "<br>";
// printf ("Nilai : %2f<br>",$nilai);

// if($status)
// {
// 	echo "Aktif";
// }else{
// 	echo "Tidak Aktif";
// }

// $balita = 5;
// $remaja = 17;
// $dewasa = 25;

// $umur = 15;
// if($umur <= $balita) {
// 	echo "Balita"."<br>";
// }elseif (
// 	$umur <= $remaja
// ) {
// 	echo "Remaja";
// }elseif (
// 	$umur <= $dewasa
// ) {
// 	echo "Dewasa";
// }
// else{
// 	echo "Orang Tua";
// };

// $star=10;
// 	for ($a=$star;$a>0;$a--){
// 	//for ($i=1;$i<=$a;$i++)
// 	for ($a1=$star;$a1>=$a;$a1--) { 
// 		echo "<center>"; 
// 		echo"*";
// 	}
// 	echo "<br>";
// 	}

// $bilangan = 0;
// for ($bilangan; $bilangan <= 10 ; $bilangan++) {
// 	if ($bilangan % 2 !=0)
// 	echo $bilangan;
// }

// //1
// $jenisKelamin = "laki-laki";
// $umur = 20;
// $status = "menikah";
// if ($jenisKelamin = "laki-laki", $umur => 18, $status = "menikah" ) {
// 	echo "Selamat Datang Pak!";
// }elseif ($jenisKelamin = "perempuan", $umur => 18, $status = "menikah" ) {
// 	echo "Selamat Datang Bu!";
// }elseif ($jenisKelamin = "laki-laki", $umur => 18, $status = "belum menikah" ) {
// 	echo "Selamat Datang anak laki-laki!";
// }elseif ($jenisKelamin = "laki-laki", $umur => 18, $status = "belum menikah" ) {
// 	echo "Selamat Datang anak perempuan!";
// }else ($umur < 18 ) {
// 	echo "Website ini hanya untuk orang yang berumur 18+ !";
// }

//2
// $bb = 60;
// $tb = 160;
// $bmi = $bb/($tb*$tb);

// if ($bmi < 18.5){
// 	echo "berat badan anda kurang";
// } elseif ($bmi < 22.9) {
// 	echo "berat badan normal";
// } elseif ($bmi < 29.9) {
// 	echo "berat badan anda berlebih";
// } elseif ($bmi > 29.9) {
// 	echo "OBESITAS";
// } echo "<br>";

//3
// $nilai = 90;
// echo "Nilai = ".$nilai."<br>";
// echo "Grade = ";
// if ($nilai >= 0 && $nilai <= 59) {
// 	echo "E";
// } elseif ($nilai >= 60 && $nilai <= 69){
// 	echo "D";
// } elseif ($nilai >= 70 && $nilai <= 79){
// 	echo "C";
// } elseif ($nilai >= 80 && $nilai <= 89){
// 	echo "B";
// } elseif ($nilai >= 90 && $nilai <= 100){
// 	echo "A";
// } else {echo "Mana ada."."<br>";}

//4
// $deret = 3;
// for ($i=1; $i <= 50; $i++) { 
// 	if ($hasil = $i % $deret == 0)
// 	echo $i." ";
// }





$a = array('aa','bb','cc');
$b = ['aa', 'bb', 'cc', 'dd'];

// for ($i=; $i < count($b); $i++) { 
// 	echo $b[$i];
// }
/*
foreach ($b as $z ) {
	echo $b //$z;
}*/

$c = [
	'nama' => 'aaaa',
	'alamat' => 'kkkkkk'
];

// echo $c['alamat'];

foreach ($c as $key => $value){
	echo "$key adalah $value";
}

?>