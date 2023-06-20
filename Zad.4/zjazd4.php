
<html>
<head>
<title>Hotel</title>
<?php
session_start();

function two()
{
    ?>
    <form action="three.php" method="post">
        <input type="text" name="first_nametwo" placeholder="Name" required><br>
        <input type="text" name="last_nametwo" placeholder="Last Name" required><br>
        <input id="phone" type="tel" name="phonetwo" placeholder="Your Phone Number" required><br>
        <input type="submit" value="twos" name="submit"/>
    </form>
    <?php
}

if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['first_nametwo'], $_POST['last_nametwo'], $_POST['email'], $_POST['phone'], $_POST['two'], $_POST['ppl'], $_POST['room_pref'])) {
    $arrival = htmlspecialchars($_POST['arrival']);
    $departure = htmlspecialchars($_POST['departure']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $first_nametwo = htmlspecialchars($_POST['first_nametwo']);
    $last_nametwo = htmlspecialchars($_POST['last_nametwo']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $phonetwo = htmlspecialchars($_POST['phonetwo']);
    $ppl = htmlspecialchars($_POST['ppl'], ENT_QUOTES);
    $room_pref = htmlspecialchars($_POST['room_pref']);

    echo "Check your answers: <br>
        Arrival: " . $arrival . "<br>
        Departure: " . $departure . "<br>
        First name: " . $first_name . "<br>
        Last name: " . $last_name . "<br>
        Email: " . $email . "<br>
        Phone: " . $phone . "<br>
        First name 2: " . $first_nametwo . "<br>
        Last name 2: " . $last_nametwo . "<br>
        Phone 2: " . $phonetwo . "<br>
        Number of people: " . $ppl . "<br>
        Preferred room: " . $room_pref;

    // Set cookie values
    setcookie('arrival', $arrival, time() + (86400 * 30), '/');
    setcookie('departure', $departure, time() + (86400 * 30), '/');
    setcookie('first_name', $first_name, time() + (86400 * 30), '/');
    setcookie('last_name', $last_name, time() + (86400 * 30), '/');
    setcookie('first_nametwo', $first_nametwo, time() + (86400 * 30), '/');
    setcookie('last_nametwo', $last_nametwo, time() + (86400 * 30), '/');
    setcookie('email', $email, time() + (86400 * 30), '/');
    setcookie('phone', $phone, time() + (86400 * 30), '/');
    setcookie('phonetwo', $phonetwo, time() + (86400 * 30), '/');
    setcookie('ppl', $ppl, time() + (86400 * 30), '/');
    setcookie('room_pref', $room_pref, time() + (86400 * 30), '/');
}

?>
</head>
<body>
<?php
// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Display the form
    ?>
    <form action="" method="post">
        <label for="ppl">Select number of people in room</label>
        <select id="ppl" required>
            <option disabled selected value="">--</option>
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
            <option value="four">4</option>
        </select>
        <br>
        <input type="text" name="first_name" placeholder="Name" required><br>
        <input type="text" name="last_name" placeholder="Last Name" required><br>
        <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required><br>
        <input id="email" type="email" name="email" placeholder="Your Email" required>
        <input type="submit">
        <select id="room_pref" name="room_pref" required>
            <option disabled selected value="">--</option>
            <option value="Smoking">Suited for smokers</option>
            <option value="Kid">Suited for baby</option>
            <option value="Animal">Suited for animals</option>
        </select>
        Arrival: <input id="arrival" type="date" name="arrival" required>
        Departure: <input id="departure" type="date" name="departure" required>
        <input type="submit" value="Reserve">
    <?php
    if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['ppl'], $_POST['room_pref'])) {
        $arrival = htmlspecialchars($_POST['arrival']);
        $departure = htmlspecialchars($_POST['departure']);
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $ppl = htmlspecialchars($_POST['ppl'], ENT_QUOTES);
        $room_pref = htmlspecialchars($_POST['room_pref']);

        if ($ppl == 'two') {
            two();
        }

        if ($ppl == 'one') {
            echo "Check your answers: <br>
                Arrival: " . $arrival . "<br>
                Departure: " . $departure . "<br>
                First name: " . $first_name . "<br>
                Last name: " . $last_name . "<br>
                Email: " . $email . "<br>
                Phone: " . $phone . "<br>
                Number of people: " . $ppl . "<br>
                Preferred room: " . $room_pref;
        }
    }
} else {
    // User is not logged in
    echo "Access denied. Please log in to access this page.";
}
?>
</form>
</body>
</html>
