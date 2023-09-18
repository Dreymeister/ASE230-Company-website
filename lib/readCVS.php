<?php
function readCSV($fileIn) {
    if (!file_exists($fileIn)) {
        return "ERROR - CSV file $fileIn not found...";
    }

    $file = fopen($fileIn, 'r');
    if (!$file) {
        return "ERROR - Unable to open CSV file: $fileIn";
    }

    $header = fgetcsv($file);
    $data = [];

    while ($row = fgetcsv($file)) {
        $data[] = array_combine($header, $row);
    }

    fclose($file);
    return $data;
}

$csvFile = "your_file.csv";
$data = readCSV($csvFile);
if (!is_array($data)) {
    echo $data;
} else {
    print_r($data);
}
?>
