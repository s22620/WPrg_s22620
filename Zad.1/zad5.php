<html>
<head>
</head>
<body>
<?php
	$napisy = explode(" ", $_GET['napisy']); // pobieramy napisy z adresu URL i dzielimy je na części za pomocą funkcji explode()
	$napis1 = $napisy[0]; // pierwszy napis
	$napis2 = $napisy[1]; // drugi napis
	
	echo "%$napis2 $napis1%$#"; // wyświetlamy sformatowany tekst
?>
</body>
</html>
