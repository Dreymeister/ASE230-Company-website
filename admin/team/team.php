<?php
require_once('../../global.php');

function deleteMember($memberName) {
    $team = getTeam();
    $imagePath = $team[$memberName]['image'];
    unset($team[$memberName]);
    $teamJson = json_encode($team, JSON_PRETTY_PRINT);
    file_put_contents('../../data/team.json', $teamJson);
    if (file_exists('../../'.$imagePath)) {
        unlink('../../'.$imagePath);
    }
}

function getTeam() {
    $teamJson = file_get_contents('../../data/team.json');
    $team = json_decode($teamJson, true);
    return $team;
}

function getMember($memberName) {
    $team = getTeam();
    return $team[$memberName];
}

function tableRowTeam($team) {
    foreach($team as $member => $details){
        echo '<tr style="border: 1px solid black; border-collapse: collapse;">
        <td style="border: 1px solid black; border-collapse: collapse;">' . $member . '</td>
        <td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $member . '">Details</a></td>
        </tr>';
    }
}

function updateTeam($post){
    $team = getTeam();
    if (!empty($_FILES['image']['name'])) {
        $newImagePath = 'images/team/' . $post['memberName'] . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], APP_ROOT . '/' . $newImagePath);
    } else {
        $newImagePath = $post['oldImage'];
    }
    $team[$post['memberName']] = [
        'role' => $post['role'],
        'description' => $post['description'],
        'image' => $newImagePath,
    ];    
    $teamJson = json_encode($team, JSON_PRETTY_PRINT);
    file_put_contents('../../data/team.json', $teamJson);
}
?>