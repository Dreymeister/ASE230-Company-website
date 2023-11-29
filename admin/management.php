<?php 
class EntityManagement {
    private $entityType;

    public function __construct($entityType) {
        $this->entityType = $entityType;
    }

    public function deleteEntity($entityName) {
        $entities = $this->getEntities();
        unset($entities[$entityName]);
        $this->saveEntities($entities);
    }

    public function getEntities() {
        $entitiesJson = file_get_contents('../../data/' . $this->entityType . '.json');
        $entities = json_decode($entitiesJson, true);
        return $entities;
    }

    public function getEntity($entityName) {
        $entities = $this->getEntities();
        return $entities[$entityName];
    }

    public function tableRowEntities($entities) {
        foreach ($entities as $entity => $details) {
            echo '<tr style="border: 1px solid black; border-collapse: collapse;">
                <td style="border: 1px solid black; border-collapse: collapse;">' . $entity . '</td>';
    
            if ($this->entityType === 'awards') {
                echo '<td style="border: 1px solid black; border-collapse: collapse;">' . $details['year'] . '</td>';
            }
    
            echo '<td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $entity . '">Details</a></td>
                </tr>';
        }
    }
    

    public function updateEntity($post){
        $entities = $this->getEntities();
        $entities[$post[$this->entityType . 'Name']] = $this->extractEntityDetails($post);
        $this->saveEntities($entities);
    }

    private function extractEntityDetails($post) {
        if ($this->entityType === 'awards') {
            return [
                'year' => $post['year'],
                'description' => $post['description'],
            ];
        } elseif ($this->entityType === 'products') {
            return [
                'description' => $post['description'],
                'applications' => [
                    $post['app1Name'] => $post['app1Description'],
                    $post['app2Name'] => $post['app2Description']
                ]
            ];
        }
    }

    private function saveEntities($entities) {
        $entitiesJson = json_encode($entities, JSON_PRETTY_PRINT);
        file_put_contents('../../data/' . $this->entityType . '.json', $entitiesJson);
    }
}

?>