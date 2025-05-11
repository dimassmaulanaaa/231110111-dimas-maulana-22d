<!-- Add New Project -->
<div class="modal fade" id="newProjectModal" tabindex="-1" aria-labelledby="newProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-0 mb-2">
                <h5 class="modal-title fs-4" id="newProjectModalLabel">New Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <form class="needs-validation" action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label" for="category">Category</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="e.g., Graphic Design" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="details">Details</label>
                        <textarea
                            class="form-control"
                            id="details"
                            name="details"
                            rows="4"
                            placeholder="ETTASHANE - Social media design special ramadhan"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label visually-hidden" for="projectPhoto">Choose File</label>
                        <input
                            type="file"
                            class="form-control"
                            id="projectPhoto"
                            name="projectPhoto"
                            accept="image/*"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-3 py-2" name="submitAddProject">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>