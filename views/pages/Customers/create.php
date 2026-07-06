<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h3>Create Customer</h3>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/customers/save" method="post">

                <div class="mb-3">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3" required></textarea>
                </div>

                <button type="submit" name="btn_submit" class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/customers" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>