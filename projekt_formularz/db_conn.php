<?php

$sname= "localhost"; // Nazwa lub adres serwera bazy danych
$unmae= "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło użytkownika bazy danych

$db_name = "s22620_db"; // Nazwa bazy danych

$conn = mysqli_connect($sname, $unmae, $password, $db_name); // Ustanowienie połączenia z bazą danych

// Sprawdzenie, czy połączenie zostało nawiązane poprawnie
if (!$conn) {
    echo "Connection failed!";
}
?>


