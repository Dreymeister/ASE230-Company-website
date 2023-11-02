<?php

function deleteAward($awardName) {
    $awards = getAwards();
    unset($awards[$awardName]);
    $awardsJson = json_encode($awards, JSON_PRETTY_PRINT);
    file_put_contents('../../data/awards.json', $awardsJson);
}

function getAwards() {
    $awardsJson = file_get_contents('../../data/awards.json');
    $awards = json_decode($awardsJson, true);
    return $awards;
}

function getAward($awardName) {
    $awards = getawards();
    return $awards[$awardName];
}

function tableRowAwards($awards) {
    foreach($awards as $award => $details){
        echo '<tr style="border: 1px solid black; border-collapse: collapse;">
            <td style="border: 1px solid black; border-collapse: collapse;">' . $award . '</td>
            <td style="border: 1px solid black; border-collapse: collapse;">' . $details['year'] . '</td>
            <td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $award . '">Details</a></td>
            </tr>';
    }
}

function updateAwards($post){
    $awards = getAwards();
    $awards[$post['awardName']] = [
        'year' => $post['year'],
        'description' => $post['description'],
    ];
    $awardsJson = json_encode($awards, JSON_PRETTY_PRINT);
    file_put_contents('../../data/awards.json', $awardsJson);
}
?>