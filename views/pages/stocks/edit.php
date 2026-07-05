<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Stock</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/stocks/update" method="post">

                <input type="hidden" name="id" value="<?php echo $data->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Product ID</label>
                    <input type="number" name="product_id" class="form-control"
                           value="<?php echo $data->product_id; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="quantity" class="form-control"
                           value="<?php echo $data->quantity; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Transaction ID</label>
                    <input type="number" name="transaction_id" class="form-control"
                           value="<?php echo $data->transaction_id; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Warehouse ID</label>
                    <input type="number" name="warehouse_id" class="form-control"
                           value="<?php echo $data->warehouse_id; ?>" required>
                </div>

                <button type="submit" name="btn_submit" class="btn btn-success">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/stocks" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>