<html>
<head>
<title> Bilangan Ganjil Genap </title>
</head>
<body>
<b>
<!-- <form method="post">
    Masukkan Bilangan : <input type="text" name="bilangan"> <br><br>
     <input type="submit" value="Cari Bilangan" >
</form> -->
<?php
// $kalimat="saya.sedang.belajar.php";
// echo str_replace("."," ",$kalimat);


 $bilangan = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
 foreach ($bilangan as $i) {
 	if ($i == 5) {
 		echo $i," sama dengan 5 <br>  "; 
 	}elseif ($i > 5) {
 		echo $i, " lebih dari 5 <br>";
 	}elseif ($i < 5) {
 		echo $i, " kurang dari 5 <br>";
 	}
 }
 
 

// $bilangan = isset($_POST['bilangan'])?abs((int)$_POST['bilangan']):'';

// {
// if($bilangan == null )
//  echo ("Masukkan Angka!");
// else if ($bilangan % 2 == 0)
//  echo (" $bilangan adalah bilangan Genap ");
// else
//  echo (" $bilangan adalah bilangan Ganjil ");
// }
?>
</b>
</body>
</html>



 
