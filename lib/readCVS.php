function readCSV($fileIn) {
    if (file_exists($fileIn)) {
        // Open the CSV file for reading
        $file = fopen($fileIn, 'r');

        if ($file) {
            // Read the first row of the CSV file (header row)
            $header = fgetcsv($file);

            $data = array();

            // Read the remaining rows of the CSV file
            while (($row = fgetcsv($file)) !== false) {
                // Combine the header with the current row to create an associative array
                $data[] = array_combine($header, $row);
            }

            // Close the CSV file
            fclose($file);

            return $data;
        } else {
            // Handle the case where the file couldn't be opened
            return "ERROR - Unable to open CSV file: $fileIn";
        }
    } else {
        // Handle the case where the file doesn't exist
        return "ERROR - CSV file $fileIn not found...";
    }
}

// Example usage:
$csvFile = "your_file.csv";
$data = readCSV($csvFile);
if (!is_array($data)) {
    echo $data; // Print the error message
} else {
    print_r($data); // Print the CSV data as an array
}
