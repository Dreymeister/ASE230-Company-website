<?php
$dirPath = "../../data/pages";
require_once('./pages.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pageFilename = $_POST["page_filename"];
    $pageContents = $_POST["page_contents"];

    if (file_put_contents($dirPath . '/' . $pageFilename, $pageContents) !== false) {
        if (isset($_GET["file"]) && $_GET["file"] != $_POST["page_filename"]) {
            deleteFile($dirPath . '/' . $_GET["file"]);
        }

        header("Location: detail.php?file=" . urlencode($pageFilename));
        exit();
    } else {
        echo "Failed to save the file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Edit Page</h1>
        <form method="post" action="edit.php?file=<?= $_GET["file"] ?>">
            <div class="form-group">
                <label for="page_filename">Page Filename:</label>
                <input type="text" class="form-control" id="page_filename" name="page_filename" value="<?= $_GET["file"] ?>" required>
            </div>
            <div class="form-group">
                <label for="page_contents">Page Contents:</label>
                <textarea class="form-control" id="page_contents" name="page_contents" rows="4" required><?= htmlspecialchars(getPageContent($dirPath, $_GET["file"])) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
