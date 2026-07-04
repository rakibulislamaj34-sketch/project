<?php
// print_r($data);
?>

<div class="card">
    <div class="card-body">

        <form method="post" action="<?php echo $base_url; ?>/users/update">

            <input type="hidden" name="id" value="<?php echo $data->id ?? ''; ?>">

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input
                    type="text"
                    name="full_name"
                    class="form-control"
                    value="<?php echo $data->full_name ?? ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="<?php echo $data->email ?? ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input
                    type="text"
                    name="password"
                    class="form-control"
                    value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Role ID</label>
                <input
                    type="number"
                    name="role_id"
                    class="form-control"
                    value="<?php echo $data->role_id ?? ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input
                    type="text"
                    name="photo"
                    class="form-control"
                    value="<?php echo $data->photo ?? ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <input
                    type="text"
                    name="status"
                    class="form-control"
                    value="<?php echo $data->status ?? ''; ?>">
            </div>

            <button type="submit" name="btn_submit" class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
</div>