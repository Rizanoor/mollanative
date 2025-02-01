<?php
require_once './controllers/ProfileController.php';

session_start();

$base_url = "http://localhost:8888/mollanative";


if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_destroy();
    header("Location:login/");
    exit();
}

if (!isset($_SESSION['user_name'])) {
    header('location:login/');
}

$id = $_SESSION['user_id'];
$profileController = new ProfileController();
$profile = $profileController->getProfile($id);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE | Dashboard v2" />
    <meta name="author" content="ColorlibHQ" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="<?php echo $base_url; ?>/admin/assets/css/adminlte.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/admin/assets/css/adminlte.css" />

    <style>
        body {
            font-family: "Poppins", serif;
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/admin/index.php?logout=true">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <div class="sidebar-brand">
                <a href="./index.html" class="brand-link">
                    <span class="brand-text fw-light">Admin</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <?php
                // Tentukan halaman aktif berdasarkan parameter URL
                $activePage = isset($_GET) && count($_GET) > 0 ? key($_GET) : 'home';
                ?>
                <nav class="mt-2">
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview">
                        <li class="nav-item">
                            <a href="../admin/" class="nav-link <?php echo $activePage === 'home' ? 'active' : ''; ?>">
                                <i class="bi bi-house"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?about=true" class="nav-link <?php echo $activePage === 'about' ? 'active' : ''; ?>">
                                <i class="bi bi-file-person"></i>
                                <p>About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?resume=true" class="nav-link <?php echo $activePage === 'resume' ? 'active' : ''; ?>">
                                <i class="bi bi-file-earmark"></i>
                                <p>Resume</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?project=true" class="nav-link <?php echo $activePage === 'project' ? 'active' : ''; ?>">
                                <i class="bi bi-tools"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?account=true" class="nav-link <?php echo $activePage === 'account' ? 'active' : ''; ?>">
                                <i class="bi bi-gear"></i>
                                <p>Account Setting</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">
                                <?php
                                if (isset($_GET['about'])) {
                                    echo "About";
                                } elseif (isset($_GET['resume'])) {
                                    echo "Resume";
                                } elseif (isset($_GET['project'])) {
                                    echo "Projects";
                                } elseif (isset($_GET['account'])) {
                                    echo "Account Settings";
                                } else {
                                    echo "Home";
                                }
                                ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <?php
                        if (isset($_GET['about'])) {
                            include('about.php');
                        } elseif (isset($_GET['resume'])) {
                            include('resume.php');
                        } elseif (isset($_GET['project'])) {
                            include('project.php');
                        } elseif (isset($_GET['account'])) {
                            include('account.php');
                        } else {
                        ?>
                            <div class="col-lg-12">
                                <?php
                                if (isset($_SESSION['message'])) {
                                    $message = $_SESSION['message'];
                                    $message_type = $_SESSION['message_type'];
                                    echo "<div class='alert alert-$message_type'>$message</div>";

                                    // Hapus pesan setelah ditampilkan
                                    unset($_SESSION['message']);
                                    unset($_SESSION['message_type']);
                                }
                                ?>

                                <div class="card card-primary card-outline mb-4">
                                    <form class="needs-validation" action="../admin/controllers/UpdateProfileController.php" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($profile['user_id'] ?? ''); ?>">
                                                <div class="col-md-12">
                                                    <?php if (!empty($profile['hero_photo'])): ?>
                                                        <div id="hero_photo_preview" style="margin-top: 10px;">
                                                            <img id="hero_photo_image" src="../admin/uploads/<?= $profile['hero_photo']; ?>" alt="Hero Photo Preview" style="max-width: 10%; height: auto; border-radius: 8px;">
                                                        </div>
                                                    <?php endif; ?>
                                                    <label for="hero_photo" class="form-label mt-3">Hero Photo</label>
                                                    <input type="file" name="hero_photo" class="form-control" id="hero_photo_input">
                                                    <small>Photo (Minimum 1920 X 1280, Maxsize 2mb)</small>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="name" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap" value="<?php echo htmlspecialchars($profile['name'] ?? ''); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="instagram" class="form-label">Instagram</label>
                                                    <input type="text" class="form-control" name="instagram" placeholder="Masukkan Instagram" value="<?php echo htmlspecialchars($profile['instagram'] ?? ''); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="facebook" class="form-label">Facebook</label>
                                                    <input type="text" class="form-control" name="facebook" placeholder="Masukkan Facebook" value="<?php echo htmlspecialchars($profile['facebook'] ?? ''); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="linkedin" class="form-label">Linkedin</label>
                                                    <input type="text" class="form-control" name="linkedin" placeholder="Masukkan Linkedin" value="<?php echo htmlspecialchars($profile['linkedin'] ?? ''); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="github" class="form-label">Github</label>
                                                    <input type="text" class="form-control" name="github" placeholder="Masukkan Github" value="<?php echo htmlspecialchars($profile['github'] ?? ''); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Telepon</label>
                                                    <input type="tel" class="form-control" name="phone" placeholder="Masukkan Telepon" value="<?php echo htmlspecialchars($profile['phone'] ?? ''); ?>">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Alamat</label>
                                                    <textarea name="address" id="address" class="form-control"><?php echo htmlspecialchars($profile['address'] ?? ''); ?></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo htmlspecialchars($profile['email'] ?? ''); ?>" required>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary mt-3" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo $base_url; ?>/admin/assets/js/adminlte.js"></script>
</body>

</html>