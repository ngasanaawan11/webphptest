<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Penerima</title>
</head>
<body>

	<h1>Penerima</h1>

	<h4>

	<?php

        function hitungTambah(int $x, int $y){
			$hasilTambah = $x + $y;
			return $hasilTambah;
        }

		function hitungKurang(int $x, int $y){
			$hasilKurang = $x - $y;
			return $hasilKurang;
        }

		function hitungKali(int $x, int $y){
			$hasilKali = $x * $y;
			return $hasilKali;
        }

		function hitungBagi(int $x, int $y){
			$hasilBagi = $x / $y;
			return $hasilBagi;
        }


        echo "Angka 1 yang diinput : ". $_POST["var_angka1"] . "<br>";
        echo "Angka 2 yang diinput : ". $_POST["var_angka2"] . "<br>";

		echo "<br>";

		echo "Hasil tambah = ".hitungTambah($_POST["var_angka1"], $_POST["var_angka2"])." <br>";
		echo "Hasil kurang = ".hitungKurang($_POST["var_angka1"], $_POST["var_angka2"])." <br>";
		echo "Hasil kali = ".hitungKali($_POST["var_angka1"], $_POST["var_angka2"])." <br>";
		echo "Hasil bagi = ".hitungBagi($_POST["var_angka1"], $_POST["var_angka2"])." <br>";

	?>

	</h4>
	
</body>
</html>