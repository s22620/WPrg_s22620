<html>
<head>
</head>
<body>
<?php
// pobranie trzech liczb rzeczywistych
echo "Podaj pierwszą liczbę: ";
$a = floatval(fgets(STDIN));
echo "Podaj drugą liczbę: ";
$b = floatval(fgets(STDIN));
echo "Podaj trzecią liczbę: ";
$c = floatval(fgets(STDIN));

// najmniejsza wartość
if ($a <= $b && $a <= $c) {
    echo $a . " ";
    if ($b <= $c) {
        echo $b . " " . $c . "\n";
    } else {
        echo $c . " " . $b . "\n";
    }
} elseif ($b <= $a && $b <= $c) {
    echo $b . " ";
    if ($a <= $c) {
        echo $a . " " . $c . "\n";
    } else {
        echo $c . " " . $a . "\n";
    }
} else {
    echo $c . " ";
    if ($a <= $b) {
        echo $a . " " . $b . "\n";
    } else {
        echo $b . " " . $a . "\n";
    }
}

// największa wartość
if ($a >= $b && $a >= $c) {
    echo $a . " ";
    if ($b >= $c) {
        echo $b . " " . $c . "\n";
    } else {
        echo $c . " " . $b . "\n";
    }
} elseif ($b >= $a && $b >= $c) {
    echo $b . " ";
    if ($a >= $c) {
        echo $a . " " . $c . "\n";
    } else {
        echo $c . " " . $a . "\n";
    }
} else {
    echo $c . " ";
    if ($a >= $b) {
        echo $a . " " . $b . "\n";
    } else {
        echo $b . " " . $a . "\n";
    }
}
?>


</body>
</html>
