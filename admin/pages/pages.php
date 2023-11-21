<?php

class Page {
    private $pageName;
    private $pageContent;

    public function __construct($pageName, $pageContent) {
        $this->pageName = $pageName;
        $this->pageContent = $pageContent;
    }

    public function getName() {
        return $this->pageName;
    }

    public function getContent() {
        return $this->pageContent;
    }

    public function printPage() {
        echo '
        <tr>
            <td><a href="./detail.php?file=' . urlencode($this->pageName) . '">' . $this->pageName . '</a></td>
            <td>' . $this->pageContent . '</td>
        </tr>
        ';
    }
}

class Pages {
    public static function getPageInfo($dir_path) {
        $files = [];

        $dir_handle = opendir($dir_path);

        if ($dir_handle) {
            while (false !== ($filename = readdir($dir_handle))) {
                $file_path = $dir_path . "/" . $filename;

                if (is_file($file_path)) {
                    $contents = file_get_contents($file_path);
                    $files[] = new Page($filename, $contents);
                }
            }

            closedir($dir_handle);
        } else {
            echo "Failed to open directory!";
        }
        return $files;
    }

    public static function getPageContent($dir_path, $fileName) {
        $file_path = $dir_path . "/" . $fileName;

        if (is_file($file_path)) {
            $pageContent = file_get_contents($file_path);
            return $pageContent;
        } else {
            return null;
        }
    }

    public static function addNewPage($pagesDir, $filename, $contents) {
        if (!empty($filename) && !empty($contents)) {
            $file_path = $pagesDir . "/" . $filename;

            if (file_put_contents($file_path, $contents) !== false) {
                return true;
            }
        }
        return false;
    }

    public static function deleteFile($txtFileName) {
        if (file_exists($txtFileName)) {
            return unlink($txtFileName);
        }
        return false;
    }
}

function createTable($headings, $files) {
    echo '
    <div class="container-fluid">
        <table class="table" style="width: 90%; margin: auto;">
            <thead>
                <tr>
    ';
    foreach ($headings as $key => $heading) {
        echo '
            <th>' . $heading . '</th>
        ';
    }
    echo '
                </tr>
            </thead>
            <tbody>
    ';
    foreach ($files as $key => $file) {
        $file->printPage();
    }
    echo '
            </tbody>
        </table>
    </div>
    ';
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

