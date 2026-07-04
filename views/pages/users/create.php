<?php
?>

<div class="card">
    <div class="card-header">
        <h4>Create User</h4>
    </div>

    <div class="card-body">

        <form method="post" action="<?php echo $base_url; ?>/users/save">

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input
                    type="text"
                    name="full_name"
                    class="form-control"
                    placeholder="Enter Full Name"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Email"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter Password"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Role ID</label>
                <input
                    type="number"
                    name="role_id"
                    class="form-control"
                    placeholder="Enter Role ID"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input
                    type="text"
                    name="photo"
                    class="form-control"
                    placeholder="Photo Name or Path">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <button type="submit" name="btn_submit" class="btn btn-primary">
                Save
            </button>

            <a href="<?php echo $base_url; ?>/users" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>
</div>
