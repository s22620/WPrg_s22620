<!DOCTYPE html>
<html>
<head>
	<title>Pole prostokąta</title>
</head>
<body>
	<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Wpisz długość boku a: <input type="text" name="a"><br>
		Wpisz długość boku b: <input type="text" name="b"><br>
		<input type="submit" name="submit" value="Oblicz pole">
	</form>
	<?php
	if(isset($_GET['submit'])) {
		// pobieranie wartości a i b z formularza
		$a = $_GET['a'];
		$b = $_GET['b'];
		
		// obliczanie pola prostokąta i wyświetlanie wyniku
		$pole = $a * $b;
		echo "Pole prostokąta o bokach a = $a i b = $b wynosi: $pole";
	}
	?>
</body>
</html>
