<?php
// print_r($data);
?>

<div class="card">
    <div class="card-header">
        <h4>Edit Warehouse</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo $base_url; ?>/warehouses/update" method="post">

            <input type="hidden" name="id" value="<?php echo $data->id; ?>">

            <div class="mb-3">
                <label class="form-label">Warehouse ID</label>
                <input type="text" name="warehouseid" class="form-control"
                    value="<?php echo $data->warehouseid; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Warehouse Name</label>
                <input type="text" name="name" class="form-control"
                    value="<?php echo $data->name; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Manager Name</label>
                <input type="text" name="manager_name" class="form-control"
                    value="<?php echo $data->manager_name; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">User ID</label>
                <input type="number" name="userid" class="form-control"
                    value="<?php echo $data->userid; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control"
                    value="<?php echo $data->phone; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control"
                    value="<?php echo $data->email; ?>">
            </div>

            <button type="submit" name="btn_submit" class="btn btn-primary">
                Update
            </button>

            <a href="<?php echo $base_url; ?>/warehouses" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>
</div>