<?php
require_once './controllers/ProjectController.php';

$controller = new ProjectController();

$controller->handleRequest();

$projects = $controller->getProjects();

$message = $_SESSION['message'] ?? '';
$message_type = $_SESSION['message_type'] ?? '';

?>

<div class="col-lg-12">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message']; ?>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <div class="card card-primary card-outline mb-4">
        <form method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="project_photo" class="form-label">Photo</label>
                        <input type="file" name="project_photo" class="form-control">
                        <small>Photo (Minimum 600px X 600px, Maxsize 2mb)</small>
                    </div>
                    <div class="col-md-6">
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" class="form-control" name="project_name" placeholder="Enter Project Name">
                    </div>
                    <div class="col-md-6">
                        <label for="project_link" class="form-label">Project Link</label>
                        <input type="text" class="form-control" name="project_link" placeholder="Enter Project Link">
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <div class="card mb-4">
        <div class="card-header justify-content-between align-items-center d-flex">
            <h3 class="card-title">Manage Project</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($projects as $index => $project): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><img src="<?= $project['project_photo'] ?>" width="50" height="50" alt="Project"></td>
                            <td><?= $project['project_name'] ?></td>
                            <td>
                                <a href="<?= htmlspecialchars($project['project_link']) ?>" target="_blank" class="badge bg-success text-white text-decoration-none">
                                    <i class="bi bi-link-45deg"></i> Lihat
                                </a>
                            </td>
                            <td>
                                <form method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo $project['id']; ?>" />
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>