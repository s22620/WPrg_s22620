<html>
<head>
</head>
<body>
<?php
do {
    $n = readline("Podaj liczbę naturalną większą od 0: ");
} while (!ctype_digit($n) || $n <= 0);

// Pierwszy wzór
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}

// Drugi wzór
for ($i = 1; $i <= $n; $i++) {
    for ($j = $n; $j >= $i; $j--) {
        echo "*";
    }
    echo PHP_EOL;
    for ($j = 1; $j <= $i; $j++) {
        echo " ";
    }
}
?>

</body>
</html>
