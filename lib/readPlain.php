<?php
function readPlain($fileIn) {
    if (file_exists($fileIn)) {
        $fileContents = file_get_contents($fileIn);

        if ($fileContents !== false) {
            return $fileContents;
        } else {
            echo "ERROR - Failed to read text file: $fileIn";
            return null;
        }
    } else {
        echo "ERROR - Text file $fileIn not found...";
        return null;
    }
}
?>
