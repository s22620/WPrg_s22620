<html>
<head>
</head>
<body>
<?php
	$pi = pi(); // pobieramy wartość pi
	$sqrt = sqrt($pi); // obliczamy pierwiastek kwadratowy
	$sqrt = number_format($sqrt, 2); // zaokrąglamy wynik do dwóch miejsc po przecinku
	echo "Pierwiastek kwadratowy z wartości pi wynosi: $sqrt";
?>
</body>
</html>
