<html>
<head>
</head>
<body>
<?php
$tekst = "The quick brown fox jumps over the lazy dog.";

// usunięcie spacji i zamiana na małe litery
$tekst = strtolower(str_replace(' ', '', $tekst));

// sprawdzenie, czy każda litera występuje przynajmniej raz
if (count(array_unique(str_split($tekst))) == 26) {
    echo "true";
} else {
    echo "false";
}
?>
</body>
</html>
