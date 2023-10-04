<?php
require_once('./awards.php');

$awardsFile = "../../data/awards/awards.csv";
$message = "";
$awardName = $_GET['award'] ?? null;

if (!$awardName) {
    header("Location: index.php");
    exit();
}

$awardDetails = getAwardDetails($awardsFile, $awardName);

if (!$awardDetails) {
    echo "Award not found.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updatedAwardName = $_POST["award_name"];
    $updatedAwardDescription = $_POST["award_description"];
    
    if (deleteAwardFromCSV($awardsFile, $awardName) && addNewAward($awardsFile, $updatedAwardName, $updatedAwardDescription)) {
        header("Location: detail.php?award=" . urlencode($updatedAwardName));
        exit();
    } else {
        $message = "Failed to update the award.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Award</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Award</h1>
        
        <?php if ($message) { ?>
            <div class="alert alert-danger"><?= $message ?></div>
        <?php } ?>
        
        <form method="post" action="edit.php?award=<?= urlencode($awardName) ?>">
            <div class="form-group">
                <label for="award_name">Award Name:</label>
                <input type="text" class="form-control" id="award_name" name="award_name" required value="<?= htmlspecialchars($awardDetails[0]) ?>">
            </div>
            <div class="form-group">
                <label for="award_description">Award Description:</label>
                <textarea class="form-control" id="award_description" name="award_description" rows="4" required><?= htmlspecialchars($awardDetails[1]) ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script src=""></script>
    <script src=""></script>
    <script src=""></script>
</body>
</html>
