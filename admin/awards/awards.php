<?php

class Awards {

    // Display awards
    public static function displayAwards($dir_path) {
        // Get array of awards
        $awards = self::readAwards($dir_path);
        $headings = ["Award", "Description"];

        // Create table
        echo '<div class="container-fluid">';
        echo '<table class="table" style="width: 90%; margin: auto;">';
        echo '<thead><tr>';
        
        foreach ($headings as $heading) {
            echo '<th>' . $heading . '</th>';
        }

        echo '</tr></thead><tbody>';

        foreach ($awards as $award) {
            $award->printAwardRow();
        }

        echo '</tbody></table></div>';
    }

    private static function readAwards($dir_path) {
        $awardsJson = file_get_contents($dir_path);
        $awardsData = json_decode($awardsJson, true);

        $awards = [];
        foreach ($awardsData as $awardData) {
            $awards[] = new Award($awardData['name'], $awardData['description']);
        }

        return $awards;
    }
}

class Award {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    // Print the award row in the table
    public function printAwardRow() {
        echo '<tr>';
        echo '<td>' . $this->name . '</td>';
        echo '<td>' . $this->description . '</td>';
        echo '</tr>';
    }
}

// Delete Award

function deleteAward($awardName) {
    $awards = Awards::getAwards();
    unset($awards[$awardName]);
    $awardsJson = json_encode($awards, JSON_PRETTY_PRINT);
    file_put_contents('../../data/awards.json', $awardsJson);
}

// Get award

function getAwards() {
    $awardsJson = file_get_contents('../../data/awards.json');
    $awards = json_decode($awardsJson, true);
    return $awards;
}

function getAward($awardName) {
    $awards = getAwards();
    return $awards[$awardName];
}

// Table 

function tableRowAwards($awards) {
    foreach($awards as $award => $details){
        echo '<tr style="border: 1px solid black; border-collapse: collapse;">
            <td style="border: 1px solid black; border-collapse: collapse;">' . $award . '</td>
            <td style="border: 1px solid black; border-collapse: collapse;">' . $details['year'] . '</td>
            <td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $award . '">Details</a></td>
            </tr>';
    }
}

// Update

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
