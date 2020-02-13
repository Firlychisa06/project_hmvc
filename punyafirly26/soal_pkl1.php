<!DOCTYPE html>
<html>
<head>
	<title>firlyy</title>
</head>
<body>
<?php
//membuat array yang berisi nama buah-buahan 
$buah = array('apel', 'jeruk', 'stroberi', 'anggur', 'melon', 'semangka', 'pisang', 'jambu', 'pir', 'nangka');
//count()untuk menghitung isi array.
//$i = 1;
//foreach ( $buah as $a) {
 //	echo $i,$a, "<br>";
 //	$i++;
// }
$a = 0;
for ($i=0; $i < count($buah) ; $i++) { 
	$a++;
	echo $a.'. '. $buah[$i]."<br>";
}
 
	//echo $buah[$x]. "<br/>" ;}

//$nilai = 110;
//if ($nilai <100 && $nilai >=85) {
//	echo "A";
//}elseif ($nilai <85 && $nilai >=60) {
//	echo "B";
//}elseif ($nilai <60 && $nilai >=20) {
//	echo "C";
//}else {
//	echo "Mengulang/Tidak ada";
//}





//$kalimat = "seMaNGat pAGi SeMuaNyA";
//$baru = strtolower($kalimat);
//$kal=ucwords($baru);
//echo $kal;
?>
</body>
</html>

