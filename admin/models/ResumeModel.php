<?php
require_once __DIR__ . '/../../app/config/database.php';

class ResumeModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAllResumes()
    {
        $query = "SELECT * FROM resumes";
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addResume($category, $institute_or_company, $course_or_position, $duration_or_period, $description)
    {
        $query = "INSERT INTO resumes (category, institute_or_company, course_or_position, duration_or_period, description) 
        VALUES (:category, :institute_or_company, :course_or_position, :duration_or_period, :description)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ':category' => $category,
            ':institute_or_company' => $institute_or_company,
            ':course_or_position' => $course_or_position,
            ':duration_or_period' => $duration_or_period,
            ':description' => $description,
        ]);
    }

    public function deleteResume($id)
    {
        $query = "DELETE FROM resumes WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([':id' => $id]);

        return $stmt->rowCount();
    }
}
