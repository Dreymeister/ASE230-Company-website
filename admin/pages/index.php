<?php
$dirPath = "../../data/pages";
$headings = ["Page", "Contents"];
require_once('./pages.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pages</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .button-margin {
            margin-bottom: 0.5in;
        }
    </style>
</head>

<body>

    <div class="text-center mt-4">
        <a href="create.php" class="btn btn-primary button-margin">Create New</a>
    </div>

    <div class="container-fluid">
        <!-- Bootstrap table -->
        <table class="table" style="width: 90%; margin: auto;">
            <thead>
                <tr>
                    <?php foreach ($headings as $heading) : ?>
                        <th><?= $heading ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (getPageInfo($dirPath) as $file) : ?>
                    <tr>
                        <td><a href="detail.php?file=<?= $file[0] ?>"><?= $file[0] ?></a></td>
                        <td><?= htmlspecialchars(getFirstWordsFromFile($dirPath . '/' . $file[0])) ?></td>
                        <td>
                            <a href="edit.php?file=<?= $file[0] ?>" class="btn btn-primary">Edit</a>
                            <a href="delete.php?file=<?= urlencode($file[0]) ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
