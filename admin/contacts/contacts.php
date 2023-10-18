<?php

class ContactManager {
    private $contactsFilePath;
    public function __construct($contactsFilePath) {
        $this->contactsFilePath = $contactsFilePath;
    }
    public function getContactDetails($contactFile) {
        $contactsArray = $this->loadContacts();
        foreach ($contactsArray as $contact) {
            if ($contact['subject'] === $contactFile) {
                return $contact;
            }
        }
        return null;
    }
    public function appendToContacts($data) {
        $currentData = $this->loadContacts();
        $currentData[] = $data;
        $this->saveContacts($currentData);
    }
    public function getAllContacts() {
        return $this->loadContacts();
    }
    private function loadContacts() {
        $contactsArray = [];
        if (file_exists($this->contactsFilePath)) {
            $contactsData = file_get_contents($this->contactsFilePath);
            $contactsArray = json_decode($contactsData, true);
            if (!is_array($contactsArray)) {
                $contactsArray = [];
            }
        }
        return $contactsArray;
    }
    private function saveContacts($data) {
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        if ($jsonData === false) {
            throw new Exception('Failed to encode data as JSON.');
        }
        $result = file_put_contents($this->contactsFilePath, $jsonData);
        if ($result === false) {
            throw new Exception('Failed to save data to file.');
        }
    }
}
$contactManager = new ContactManager('../../data/contacts/contacts.json');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $comments = $_POST['comments'] ?? '';
    $formData = [
        'name' => $name,
        'email' => $email,
        'subject' => $subject,
        'comments' => $comments
    ];
    try {
        $contactManager->appendToContacts($formData);
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}
?>
