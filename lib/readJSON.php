<?php
function readJSON($fileIn) {
    if (!file_exists($fileIn) || !($jsonContents = file_get_contents($fileIn))) {
        echo "ERROR - JSON file $fileIn not found or could not be read...";
        return null;
    }

    $jsonData = json_decode($jsonContents, true);

    if ($jsonData === null) {
        echo "ERROR - JSON parsing error in file: $fileIn";
        return null;
    }

    return $jsonData;
}

$jsonFile = "";
$data = readJSON($jsonFile);

if ($data !== null) {
    print_r($data);
}
?>
