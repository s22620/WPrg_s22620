<html>
<head>
</head>
<body>
<?php
	$a = intval($_GET['a']); // pobieramy pierwszą liczbę z adresu URL
	$b = intval($_GET['b']); // pobieramy drugą liczbę z adresu URL
	
	$suma = $a + $b; // obliczamy sumę
	$roznica = $a - $b; // obliczamy różnicę
	$iloczyn = $a * $b; // obliczamy iloczyn
	$iloraz = $a / $b; // obliczamy iloraz
	$modulo = $a % $b; // obliczamy resztę z dzielenia
	
	echo "Wynik dodawania: $suma<br>";
	echo "Wynik odejmowania: $roznica<br>";
	echo "Wynik mnożenia: $iloczyn<br>";
	echo "Wynik dzielenia: $iloraz<br>";
	echo "Reszta z dzielenia: $modulo";
?>
</body>
</html>
