<div class="col-lg-12">
    <div class="card card-primary card-outline mb-4">
        <form class="needs-validation" novalidate>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control">
                        <small>Photo (Minimum 600px X 600px, Maxsize 2mb)</small>
                    </div>
                    <div class="col-md-4">
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" class="form-control" name="project_name" placeholder="Enter Project Name">
                    </div>
                    <div class="col-md-4">
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
                        <th style="width: 10px">#</th>
                        <th>Photo</th>
                        <th>Name</th>
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