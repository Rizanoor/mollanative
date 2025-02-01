<?php
require_once __DIR__ . '/../../app/config/database.php';

class SkillModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAllSkills()
    {
        $query = "SELECT * FROM skills";
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addSkill($skillName, $experience)
    {
        $query = "INSERT INTO skills (skill_name, experience) VALUES (:skill_name, :experience)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':skill_name' => $skillName,
            ':experience' => $experience
        ]);
    }

    public function deleteSkill($id)
    {
        $query = "DELETE FROM skills WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);

        return $stmt->rowCount();
    }
}
