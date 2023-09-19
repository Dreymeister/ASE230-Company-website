<?php
function readCSV($fileIn) {
    if (!file_exists($fileIn)) {
        return "ERROR - CSV file $fileIn not found...";
    }

    $file = fopen($fileIn, 'r');
    if (!$file) {
        return "ERROR - Unable to open CSV file: $fileIn";
    }

    $delimeter = ';';
    $header = fgetcsv($file, 0, $delimeter);
    $data = [];

    while ($row = fgetcsv($file, 0, $delimeter)) {
        if (count($header) === count($row)) {
            $data[] = array_combine($header, $row);
        }
    }

    fclose($file);
    return $data;
}
?>
