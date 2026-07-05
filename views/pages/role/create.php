<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Create Role</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/role/save" method="post">

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Enter Role Name"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter Email"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description"
                              class="form-control"
                              rows="4"
                              placeholder="Enter Description"></textarea>
                </div>

                <button type="submit"
                        name="btn_submit"
                        class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/role"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>