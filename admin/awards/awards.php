<?php
function readCsvFile($csvFileName) {
    $awardsArray = [];

    if (file_exists($csvFileName)) {
        $csvData = file($csvFileName, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($csvData as $line) {
            $award = str_getcsv($line);
            $awardsArray[] = $award;
        }
    }

    return $awardsArray;
}

function writeCsvFile($csvFileName, $awardsArray) {
    $csvOutput = '';

    foreach ($awardsArray as $award) {
        $csvOutput .= '"' . implode('","', $award) . '"' . PHP_EOL;
    }

    return file_put_contents($csvFileName, $csvOutput) !== false;
}

function addOrUpdateAward($csvFileName, $awardName, $awardDescription) {
    $awardsArray = readCsvFile($csvFileName);
    $updated = false;

    foreach ($awardsArray as &$award) {
        if ($award[0] === $awardName) {
            $award[1] = $awardDescription;
            $updated = true;
            break;
        }
    }

    if (!$updated) {
        $awardsArray[] = [$awardName, $awardDescription];
    }

    return writeCsvFile($csvFileName, $awardsArray);
}

function deleteAward($csvFileName, $awardName) {
    $awardsArray = readCsvFile($csvFileName);

    foreach ($awardsArray as $key => $award) {
        if ($award[0] === $awardName) {
            unset($awardsArray[$key]);
            break;
        }
    }

    return writeCsvFile($csvFileName, $awardsArray);
}

function addNewAward($csvFileName, $name, $description) {
    $newAward = [$name, $description];
    $awardsArray = readCsvFile($csvFileName);
    $awardsArray[] = $newAward;

    return writeCsvFile($csvFileName, $awardsArray);
}
?>
