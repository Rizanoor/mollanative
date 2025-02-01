<?php

require_once __DIR__ . '/../models/ProfileModel.php';

class ProfileController
{
    private $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function getProfile($id)
    {
        $profile = $this->profileModel->getProfileByUserId($id);

        if ($profile) {
            return $profile;
        } else {
            return null;
        }
    }
}
