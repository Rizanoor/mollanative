<div class="col-lg-12">
    <div class="card card-primary card-outline mb-4">
        <form>
            <div class="card-body">
                <div class="mb-3">
                    <label for="aboutdesc" class="form-label">About Description</label>
                    <textarea class="form-control" name="aboutdesc" id=""></textarea>
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

<!-- Modal -->
<div class="modal fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSkillModalLabel">Add Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addSkillForm">
                    <div class="mb-3">
                        <label for="skillName" class="form-label">Skill Name</label>
                        <input type="text" class="form-control" id="skillName" name="skillName" placeholder="Enter skill name" required>
                    </div>
                    <div class="mb-3">
                        <label for="skillExperience" class="form-label">Skill Experience (%)</label>
                        <input type="number" class="form-control" id="skillExperience" name="skillExperience" placeholder="Enter skill experience percentage" min="0" max="100" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="addSkillForm">Save</button>
            </div>
        </div>
    </div>
</div>