<html>
<head>
</head>
<body>
<?php

// Wymiary macierzy
$a = (int) readline("Podaj ilość wierszy: ");
$b = (int) readline("Podaj ilość kolumn: ");

// Sprawdzenie poprawności wymiarów macierzy
if ($a <= 0 || $b <= 0) {
    echo "BŁĄD: Nieprawidłowe wymiary macierzy!\n";
    exit();
}

// Inicjalizacja macierzy
$matrix = array();
for ($i = 0; $i < $a; $i++) {
    $matrix[$i] = array();
}

// Wypełnienie macierzy wartościami podanymi przez użytkownika
for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        $matrix[$i][$j] = (int) readline("Podaj element [$i][$j]: ");
    }
}

// Wypisanie transpozycji macierzy
echo "Transpozycja macierzy:\n";
for ($j = 0; $j < $b; $j++) {
    for ($i = 0; $i < $a; $i++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";
}
?>
</body>
</html>
