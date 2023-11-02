<?php

function getRequests() {
    $requestsJson = file_get_contents('../../data/contacts.json');
    $requests = json_decode($requestsJson, true);
    return $requests;
}

function getRequest($requestName) {
    $requests = getRequests();
    return $requests[$requestName];
}

function tableRowRequests($requests) {
    foreach($requests as $request => $details){
        echo '<tr style="border: 1px solid black; border-collapse: collapse;">
        <td style="border: 1px solid black; border-collapse: collapse;">' . $request . '</td>
        <td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $request . '">Details</a></td>
        </tr>';
    }
}
?>