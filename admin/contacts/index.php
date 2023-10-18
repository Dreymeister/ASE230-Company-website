<?php
require_once './contacts.php';

$dirPath = "../../data/contacts";
$headings = ["Subject", "Name", "Email"];
$contacts = getContactsInfo($dirPath);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <table class="table" style="width: 90%; margin: auto;">
            <thead>
                <tr>
                    <?php foreach ($headings as $heading) : ?>
                        <th><?= $heading ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $file) : ?>
                    <tr>
                        <td><a href="./detail.php?file=<?= $file[2] ?>"><?= $file[2] ?></a></td>
                        <td><?= $file[0] ?></td>
                        <td><?= $file[1] ?></td>
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