<form method="post"
      action="<?= $base_url; ?>/users/save"
      enctype="multipart/form-data">

    <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Role</label>

        <select name="role_id" class="form-control" required>

            <option value="">Select Role</option>

            <?php foreach($roles as $role){ ?>

                <option value="<?= $role->id; ?>">
                    <?= $role->name; ?>
                </option>

            <?php } ?>

        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Photo</label>
        <input type="file" name="photo" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>

        <select name="status" class="form-control">

            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>

        </select>
    </div>

    <button type="submit" name="btn_submit" class="btn btn-primary">
        Save
    </button>

</form>