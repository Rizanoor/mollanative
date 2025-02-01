<?php
require_once __DIR__ . '/../../app/config/database.php';

class AboutModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAbout()
    {
        $sql = "SELECT description FROM about WHERE id = 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateAbout($description)
    {
        $sql = "UPDATE about SET description = :description WHERE id = 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
