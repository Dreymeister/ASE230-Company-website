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

    fclose($file);
    return $data;
}
?>
