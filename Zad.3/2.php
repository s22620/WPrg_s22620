<html>
<head>
<title>Kalkulator</title>
</head>
<body>
<form>
    <form action="" method="post">
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
        <?php
        require_once 'functions.php';

        if (isset($_POST['przycisk'])) {
            $poczatek = $_POST['poczatek'];
            $koniec = $_POST['koniec'];
            $przycisk = $_POST['przycisk'];

            if ($przycisk == 'dodawanie') {
                $wynik = addition($poczatek, $koniec);
                echo '<br></br>' . $wynik;

            }
            if ($przycisk == 'odejmowanie') {
                $wynik = subtraction($poczatek, $koniec);
                echo '<br></br>' . $wynik;

            }
            if ($przycisk == 'mnozenie') {
                $wynik = multiplication($poczatek, $koniec);
                echo '<br></br>' . $wynik;

            }
            if ($przycisk == 'dzielenie') {
                $wynik = division($poczatek, $koniec);
                echo '<br></br>' . $wynik;

            }
        }
        ?>

</form>
</body>
</html>
