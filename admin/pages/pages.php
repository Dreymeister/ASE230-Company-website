<?php

class Page {
    private $pageName;
    private $pageContent;

    public function __construct($pageName, $pageContent) {
        $this->setName($pageName);
        $this->setContent($pageContent);
    }

    public function setName($name) {
        $this->pageName = $name;
    }

    public function setContent($content) {
        $this->pageContent = $content;
    }

    public function printPage() {
        echo '<tr><td><a href="./detail.php?file=' . urlencode($this->pageName) . '">' . $this->pageName . '</a></td><td>' . $this->pageContent . '</td></tr>';
    }
}

class PagesManager {
    private $dirPath;

    public function __construct($dirPath) {
        $this->dirPath = $dirPath;
    }

    public function getPageInfo() {
        $pages = [];
        $dirHandle = opendir($this->dirPath);

        if ($dirHandle) {
            while (false !== ($filename = readdir($dirHandle))) {
                $filePath = $this->dirPath . "/" . $filename;

                if (is_file($filePath)) {
                    $contents = file_get_contents($filePath);
                    $pages[] = new Page($filename, $contents);
                }
            }

            closedir($dirHandle);
        } else {
            echo "Failed to open directory!";
        }

        return $pages;
    }

    public function getPageContent($fileName) {
        $filePath = $this->dirPath . "/" . $fileName;

        if (is_file($filePath)) {
            return file_get_contents($filePath);
        } else {
            return null;
        }
    }

    public function addNewPage($filename, $contents) {
        if (!empty($filename) && !empty($contents)) {
            $filePath = $this->dirPath . "/" . $filename;

            if (file_put_contents($filePath, $contents) !== false) {
                return true;
            }
        }

        return false;
    }

    public function deleteFile($fileName) {
        $filePath = $this->dirPath . "/" . $fileName;

        if (file_exists($filePath)) {
            return unlink($filePath);
        }

        return false;
    }
}

class PageRenderer {
    public static function createTable($headings, $pages) {
        echo '<div class="container-fluid"><table class="table" style="width: 90%; margin: auto;"><thead><tr>';

        foreach ($headings as $key => $heading) {
            echo '<th>' . $heading . '</th>';
        }

        echo '</tr></thead><tbody>';

        foreach ($pages as $key => $page) {
            $page->printPage();
        }

        echo '</tbody></table></div>';
    }
}

$pagesManager = new PagesManager(''); //Pathway needs to be fixed here.
$pageInfo = $pagesManager->getPageInfo();

PageRenderer::createTable(["Filename", "Contents"], $pageInfo);



?>
