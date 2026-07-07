<?php
// create.php
?>

<div class="card">
    <div class="card-header">
        <h4>Create Warehouse</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo $base_url; ?>/warehouses/save" method="post">

            <div class="mb-3">
                <label class="form-label">Warehouse ID</label>
                <input type="text" name="warehouseid" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Warehouse Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Manager Name</label>
                <input type="text" name="manager_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">User ID</label>
                <input type="number" name="userid" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <button type="submit" name="btn_submit" class="btn btn-success">
                Save
            </button>

            <a href="<?php echo $base_url; ?>/warehouses" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>
</div>