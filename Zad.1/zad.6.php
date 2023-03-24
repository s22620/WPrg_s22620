<html>
<head>
</head>
<body>
<?php
	$a = $_GET['a']; // pobieramy pierwszy bok z adresu URL
	$b = $_GET['b']; // pobieramy drugi bok z adresu URL
	$c = $_GET['c']; // pobieramy trzeci bok z adresu URL
	
	if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
		echo "Można zbudować trójkąt";
	} else {
		echo "BŁĄD";
	}
?>
</body>
</html>
