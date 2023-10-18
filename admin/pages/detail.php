<?php
$dirPath = "../../data/pages";
require_once('./pages.php');

if (isset($_GET['file'])) {
    $fileName = $_GET['file'];
    $pageContent = getPageContent($dirPath, $fileName);

    if (!$pageContent) {
        echo "Page not found.";
        exit;
    }
} else {
    echo "No page specified.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $fileName ?> Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="text-center mt-4">
        <a href="edit.php?file=<?= $_GET["file"] ?>" class="btn btn-primary button-margin">Edit</a>
    </div>
    <div class="text-center mt-4">
        <a href="delete.php?file=<?= urlencode($fileName) ?>" class="btn btn-danger button-margin">Delete</a>
    </div>
    <div class="container">
        <h1><?= $fileName ?> Details</h1>
        <div>
            <h2>Page Contents:</h2>
            <pre><?= htmlspecialchars($pageContent) ?></pre>
        </div>
        <a href="index.php">Back to Pages</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
