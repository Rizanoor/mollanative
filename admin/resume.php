<div class="col-lg-12">

    <div class="card card-primary card-outline mb-4">
        <form class="needs-validation" novalidate>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" required>
                            <option>Choose...</option>
                            <option value="education">Education</option>
                            <option value="experience">Experience</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="institute_or_company" class="form-label">Institute or Company Name</label>
                        <input type="text" class="form-control" name="institute_or_company" placeholder="Enter Institute or Company Name">
                    </div>
                    <div class="col-md-6">
                        <label for="course_or_position" class="form-label">Course or Position Name</label>
                        <input type="text" class="form-control" name="course_or_position" placeholder="Enter Course or Position Name">
                    </div>
                    <div class="col-md-6">
                        <label for="duration_or_period" class="form-label">Duration or Time Period</label>
                        <input type="text" class="form-control" name="duration_or_period" placeholder="Enter Duration or Time Period">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>


    <div class="card mb-4">
        <div class="card-header justify-content-between align-items-center d-flex">
            <h3 class="card-title">Manage Resume</h3>
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