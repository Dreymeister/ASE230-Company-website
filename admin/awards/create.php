<?php
require_once('./awards.php');

$awardsFile = "../../data/awards/awards.csv";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $awardName = $_POST["award_name"];
    $awardDescription = $_POST["award_description"];

    if (addNewAward($awardsFile, $awardName, $awardDescription)) {
        header("Location: edit.php?file=" . urlencode($awardName));
        exit();
    } else {
        $errorMessage = "Failed to add the award to the database.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Award</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Create New Award</h1>
        <?php if (isset($errorMessage)) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $errorMessage ?>
            </div>
        <?php } ?>
        <form method="post" action="create.php">
            <div class="form-group">
                <label for="award_name">Award Name:</label>
                <input type="text" class="form-control" id="award_name" name="award_name" required>
            </div>
            <div class="form-group">
                <label for="award_description">Award Description:</label>
                <textarea class="form-control" id="award_description" name="award_description" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Script not working here! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
