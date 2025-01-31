<?php
require_once './models/UserModel.php';
$userModel = new UserModel();

$userData = $userModel->getAccountData($_SESSION['user_id']);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ambil pesan dari session
$message = $_SESSION['message'] ?? '';
$message_type = $_SESSION['message_type'] ?? '';

// Hapus pesan setelah ditampilkan
unset($_SESSION['message']);
unset($_SESSION['message_type']);
?>

<div class="col-lg-12">
    <?php if (!empty($message)) : ?>
        <div class="alert alert-<?php echo $message_type === 'success' ? 'success' : 'danger'; ?>">
            <i class="bi <?php echo $message_type === 'success' ? 'bi-check-circle-fill' : 'bi-x-circle-fill'; ?>"></i>
            <span><?php echo $message; ?></span>
        </div>
    <?php endif; ?>
    <div class="card card-primary card-outline mb-4">
        <form action="../admin/controllers/AccountController.php" method="POST" class="needs-validation" novalidate>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($userData['email']); ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($userData['username']); ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        <small>Leave blank if you don't want to change the password</small>
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>