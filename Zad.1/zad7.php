<html>
<head>
</head>
<body>

<?php
	$number = $_GET['number']; // pobieramy liczbę z adresu URL
	
	switch ($number) {
		case 1:
			$month = "Styczeń";
			$days = 31;
			break;
		case 2:
			$month = "Luty";
			$days = 28;
			break;
		case 3:
			$month = "Marzec";
			$days = 31;
			break;
		case 4:
			$month = "Kwiecień";
			$days = 30;
			break;
		case 5:
			$month = "Maj";
			$days = 31;
			break;
		case 6:
			$month = "Czerwiec";
			$days = 30;
			break;
		case 7:
			$month = "Lipiec";
			$days = 31;
			break;
		case 8:
			$month = "Sierpień";
			$days = 31;
			break;
		case 9:
			$month = "Wrzesień";
			$days = 30;
			break;
		case 10:
			$month = "Październik";
			$days = 31;
			break;
		case 11:
			$month = "Listopad";
			$days = 30;
			break;
		case 12:
			$month = "Grudzień";
			$days = 31;
			break;
		default:
			echo "BŁĄD";
			exit();
	}
	
	echo "Miesiąc: $month<br>";
	echo "Liczba dni: $days";
?>



</body>
</html>
