<?php
require_once('./awards.php');

// Initialize variables
$awardName = isset($_GET['award']) ? $_GET['award'] : null;
$awardsFile = '../../data/awards/awards.csv';
$message = '';

// Check if the award name is provided and valid
if (!$awardName) {
    header("Location: index.php");
    exit();
}

// Check if the form is submitted to delete the award
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm_delete'])) {
    if (deleteAwardFromCSV($awardsFile, $awardName)) {
        header("Location: index.php?message=deleted");
        exit();
    } else {
        $message = "Failed to delete the award.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Award</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1>Confirm Deletion</h1>
        <p>Are you sure you want to delete this award?</p>

        <?php if ($message) { ?>
            <div class="alert alert-danger"><?= $message ?></div>
        <?php } ?>

        <form method="post" action="delete.php?award=<?= urlencode($awardName) ?>">
            <button type="submit" name="confirm_delete" class="btn btn-danger">Yes, Delete</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <!-- Scipts not working here! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
