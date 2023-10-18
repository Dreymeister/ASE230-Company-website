<?php

function createTable($headings, $files) {
    echo '<div class="container-fluid"><table class="table" style="width: 90%; margin: auto;"><thead><tr>';
    foreach ($headings as $heading) {
        echo '<th>' . $heading . '</th>';
    }
    echo '</tr></thead><tbody>';
    foreach ($files as $file) {
        echo '<tr><td><a href="./detail.php?file=' . $file[0] . '">' . $file[0] . '</a></td><td>' . $file[1] . '</td></tr>';
    }
    echo '</tbody></table></div>';
}

function getPageInfo($dir_path) {
    $files = [];
    $dir_handle = opendir($dir_path);

    if ($dir_handle) {
        while (false !== ($filename = readdir($dir_handle))) {
            $file_path = $dir_path . "/" . $filename;
            if (is_file($file_path)) {        
                $contents = file_get_contents($file_path);
                $files[] = [$filename, $contents];
            }
        }
        closedir($dir_handle);
    } else {
        echo "Failed to open directory!";
    }
    return $files;
}

function deleteTxtFileContents($txtFileName) {
    $file = fopen($txtFileName, 'w');
    fclose($file);
}

function getFirstWordsFromFile($txtFileName, $numWords = 10) {
    $content = file_get_contents($txtFileName);
    $words = preg_split('/\s+/', $content, $numWords + 1);
    return implode(' ', array_slice($words, 0, $numWords));
}

function editFile($dir_path, $txtFileName) {
    $files = [];
    $dir_handle = opendir($dir_path);

    if ($dir_handle) {
        while (false !== ($filename = readdir($dir_handle))) {
            $file_path = $dir_path . "/" . $filename;
            if (is_file($file_path) and $filename === $txtFileName) {        
                $contents = file_get_contents($file_path);
                print($contents);
            }
        }
        closedir($dir_handle);
    } else {
        echo "Failed to open directory!";
    }
    return $files;
}

function getPageContent($dir_path, $fileName) {
    $file_path = $dir_path . "/" . $fileName;
    if (is_file($file_path)) {
        $pageContent = file_get_contents($file_path);
        return $pageContent;
    } else {
        return null;
    }
}

function addNewPage($pagesDir, $filename, $contents) {
    if (!empty($filename) && !empty($contents)) {
        $file_path = $pagesDir . "/" . $filename;
        if (file_put_contents($file_path, $contents) !== false) {
            return true;
        }
    }
    return false;
}

function deleteFile($txtFileName) {
    if (file_exists($txtFileName)) {
        return unlink($txtFileName);
    }
    return false;
}
?>