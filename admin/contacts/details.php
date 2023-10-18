<?php
require_once('./contacts.php');
function getContactDetails($contactsFilePath, $contactFile) {
    $contactsData = file_get_contents($contactsFilePath);
    $contactsArray = json_decode($contactsData, true);
    foreach ($contactsArray as $contact) {
        if ($contact['subject'] === $contactFile) {
            return $contact;
        }
    }
    return null;
}
function displayContactDetails($contactDetails) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $contactDetails['name'] ?> Details</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1><?= $contactDetails['name'] ?> Details</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $contactDetails['name'] ?></td>
                        <td><?= $contactDetails['email'] ?></td>
                        <td><?= $contactDetails['subject'] ?></td>
                        <td><?= $contactDetails['comments'] ?></td>
                    </tr>
                </tbody>
            </table>
            <a href="index.php">Back to Contacts</a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
}
$contactsFilePath = "../../data/contacts/contacts.json";
if (isset($_GET['file'])) {
    $contactFile = $_GET['file'];
    $contactDetails = getContactDetails($contactsFilePath, $contactFile);
    if ($contactDetails) {
        displayContactDetails($contactDetails);
    } else {
        echo "Contact not found.";
    }
} else {
    echo "No contact specified.";
}
?>
