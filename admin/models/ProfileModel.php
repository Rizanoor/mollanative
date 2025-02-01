<?php
require_once __DIR__ . '/../../app/config/database.php';

class ProfileModel
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getProfileByUserId($user_id)
    {
        $sql = "SELECT * FROM profiles WHERE user_id = :user_id LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfileById($id, $data)
    {
        $query = "UPDATE profiles SET 
            name = ?, 
            instagram = ?, 
            facebook = ?, 
            linkedin = ?, 
            github = ?, 
            phone = ?, 
            address = ?, 
            email = ? 
            WHERE user_id = ?";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            $data['name'],
            $data['instagram'],
            $data['facebook'],
            $data['linkedin'],
            $data['github'],
            $data['phone'],
            $data['address'],
            $data['email'],
            $id
        ]);

        return $stmt->execute();
    }

    // Memperbarui foto profil berdasarkan ID
    public function updateHeroPhoto($id, $photoPath)
    {
        $query = "UPDATE profiles SET hero_photo = ? WHERE user_id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$photoPath, $id]);

        return $stmt->execute();
    }
}
