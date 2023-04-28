<?php

function dodawanie($a, $b) {
    return $a + $b;
}

function odejmowanie($a, $b) {
    return $a - $b;
}

function mnozenie($a, $b) {
    return $a * $b;
}

function dzielenie($a, $b) {
    if ($b == 0) {
        return "Nie można dzielić przez zero";
    } else {
        return $a / $b;
    }
}

?>

<?php
    include('functions.php');

    if (isset($_POST['przycisk'])) {
        $poczatek = $_POST['poczatek'];
        $koniec = $_POST['koniec'];
        $przycisk = $_POST['przycisk'];

        switch ($przycisk) {
            case 'dodawanie':
                $wynik = dodawanie($poczatek, $koniec);
                break;

            case 'odejmowanie':
                $wynik = odejmowanie($poczatek, $koniec);
                break;

            case 'mnozenie':
                $wynik = mnozenie($poczatek, $koniec);
                break;

            case 'dzielenie':
                $wynik = dzielenie($poczatek, $koniec);
                break;

            default:
                $wynik = "";
                break;
        }
    }
?>

<html>
<head>
<title>Kalkulator</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="numer" name="poczatek">
    <br>
    <input type="number" name="koniec">
    <br>
    <input type="submit" name="przycisk" value="dodawanie">
    <br>
    <input type="submit" name="przycisk" value="odejmowanie">
    <br>
    <input type="submit" name="przycisk" value="mnozenie">
    <br>
    <input type="submit" name="przycisk" value="dzielenie">
    <br>
    <?php
        if (isset($wynik)) {
            echo "<br>Wynik: " . $wynik;
        }
    ?>
</form>
</body>
</html>
