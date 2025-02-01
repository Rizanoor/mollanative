<?php
require_once './models/SkillModel.php';

class SkillController
{
    private $skillModel;

    public function __construct()
    {
        $this->skillModel = new SkillModel();
    }

    public function handleRequestSkill()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['delete_id'])) {
                $this->deleteSkill($_POST['delete_id']);
            } else {
                $this->handlePostRequest();
            }
        }
    }

    private function handlePostRequest()
    {
        $skillName = $_POST['inputSkill'];
        $experience = $_POST['inputExperience'];

        $this->skillModel->addSkill($skillName, $experience);

        $_SESSION['message'] = 'Skill added successfully!';
        $_SESSION['message_type'] = 'success';

        header("Location: ../admin/index.php?about=true");
        exit;
    }

    private function deleteSkill($id)
    {
        if ($id) {
            $this->skillModel->deleteSkill($id);
            $_SESSION['message'] = 'Skill deleted successfully!';
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = 'Failed to delete skill!';
            $_SESSION['message_type'] = 'danger';
        }

        header("Location: ../admin/index.php?about=true");
        exit;
    }
    public function getSkills()
    {
        return $this->skillModel->getAllSkills();
    }
}
