<?php
require_once __DIR__ . '/../../app/config/database.php';

class ProjectModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAllProject()
    {
        $query = "SELECT * FROM projects ORDER BY id DESC";
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProject($name, $link, $project_photo)
    {
        $sql = "INSERT INTO projects (project_name, project_link, project_photo) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$name, $link, $project_photo]);
    }

    public function deleteProject($id)
    {
        $query = "DELETE FROM projects WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
