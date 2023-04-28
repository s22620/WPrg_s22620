<?php
// CSV file path
$file_path = 'data.csv';

// Check if the form is submitted
if (isset($_POST['arrival'], $_POST['departure'], $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['ppl'], $_POST['room_pref'])) {
    // Sanitize form input data
    $arrival = htmlspecialchars($_POST['arrival']);
    $departure = htmlspecialchars($_POST['departure']);
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $ppl = htmlspecialchars($_POST['ppl'], ENT_QUOTES);
    $room_pref = htmlspecialchars($_POST['room_pref']);

    // Open the CSV file in append mode
    $file = fopen($file_path, 'a');

    // Create a new record
    $record = array(
        $arrival,
        $departure,
        $first_name,
        $last_name,
        $email,
        $phone,
        $ppl,
        $room_pref
    );

    // Write the record to the CSV file
    fputcsv($file, $record);

    // Close the CSV file
    fclose($file);
}
?>


<?php
// CSV file path
$file_path = 'data.csv';

// Check if the CSV file exists
if (file_exists($file_path)) {
    // Open the CSV file in read mode
    $file = fopen($file_path, 'r');

    // Create an empty array to store the CSV data
    $data = array();

    // Read each row of the CSV file and add it to the data array
    while (($row = fgetcsv($file)) !== false) {
        $data[] = $row;
    }

    // Close the CSV file
    fclose($file);

    // Output the CSV data as an HTML table
    echo '<table>';
    foreach ($data as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo '<td>' . htmlspecialchars($cell) . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'CSV file not found';
}
?>


