<?php

require_once __DIR__ . '/../models/AboutModel.php';

class AboutController
{
    private $aboutModel;

    public function __construct()
    {
        $this->aboutModel = new AboutModel();
    }

    public function getAboutData()
    {
        return $this->aboutModel->getAbout();
    }

    public function updateAboutData($description)
    {
        return $this->aboutModel->updateAbout($description);
    }

    public function handleRequest()
    {
        // Proses jika ada permintaan untuk update
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aboutdesc'])) {
            $aboutdesc = trim($_POST['aboutdesc']);
            if ($this->updateAboutData($aboutdesc)) {
                $_SESSION['message'] = 'About description updated successfully!';
                $_SESSION['message_type'] = 'success';
            } else {
                $_SESSION['message'] = 'Failed to update about description!';
                $_SESSION['message_type'] = 'danger';
            }
        }
    }
}
