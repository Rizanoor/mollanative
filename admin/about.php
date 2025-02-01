<?php
require_once './controllers/AboutController.php';

$controller = new AboutController();
$controller->handleRequest();

// Ambil data dari model
$aboutData = $controller->getAboutData();

$message = $_SESSION['message'] ?? '';
$message_type = $_SESSION['message_type'] ?? '';
?>

<div class="col-lg-12">
    <?php if (!empty($message)): ?>
        <div class="alert alert-<?php echo htmlspecialchars($message_type); ?> alert-dismissible fade show" role="alert">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <div class="card card-primary card-outline mb-4">
        <form action="" method="POST">
            <div class="card-body">
                <div class="mb-3">
                    <label for="aboutdesc" class="form-label">About Description</label>
                    <textarea class="form-control" name="aboutdesc" id="aboutdesc"><?php echo htmlspecialchars($aboutData['description']); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


    <form>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="inputSkill" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="inputSkill" placeholder="Enter skill name" required>
            </div>

            <div class="col-md-4">
                <label for="inputExperience" class="form-label">Skill Experience (%)</label>
                <input type="number" class="form-control" id="inputExperience" placeholder="Enter skill experience" min="0" max="100" required>
            </div>

            <div class="col-md-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </div>
    </form>

    <div class="card mb-4">
        <div class="card-header justify-content-between align-items-center d-flex">
            <h3 class="card-title">Manage Skills</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Skills</th>
                        <th>Skill Experience</th>
                        <th style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                            <div class="progress progress-xs">
                                <div
                                    class="progress-bar progress-bar-danger"
                                    style="width: 55%"></div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>