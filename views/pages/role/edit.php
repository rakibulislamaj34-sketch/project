<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Role</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/role/update" method="post">

                <input type="hidden" name="id" value="<?php echo $data->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<?php echo $data->name; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="<?php echo $data->email; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description"
                              class="form-control"
                              rows="4"><?php echo $data->description; ?></textarea>
                </div>

                <button type="submit"
                        name="btn_submit"
                        class="btn btn-success">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/role"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>