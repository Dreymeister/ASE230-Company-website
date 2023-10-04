<?php
require_once('./awards.php');

$awardName = $_GET['award'] ?? null;
$awardDetails = getAwardDetails("../../data/awards/awards.csv", $awardName);

if (!$awardDetails) {
    die("Award not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $awardDetails[0]; ?> Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="text-center">
            <a href="edit.php?award=<?= urlencode($awardDetails[0]); ?>" class="btn btn-primary">Edit</a>
            <a href="delete.php?award=<?= urlencode($awardDetails[0]); ?>" class="btn btn-primary ml-2">Delete</a>
        </div>
        <h1 class="text-center"><?= $awardDetails[0]; ?> Details</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Award</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $awardDetails[0]; ?></td>
                    <td><?= $awardDetails[1]; ?></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="index.php">Back to Awards</a>
        </div>
    </div>
    <!-- Scripts not working here, still! -->
    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
</body>
</html>
