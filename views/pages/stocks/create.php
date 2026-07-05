<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Create Stock</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/stocks/save" method="post">

               
                <div class="mb-3">
                    <label class="form-label">Product ID</label>
                    <input type="number" name="product_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Transaction ID</label>
                    <input type="number" name="transaction_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Warehouse ID</label>
                    <input type="number" name="warehouse_id" class="form-control" required>
                </div>

                

                <button type="submit" name="btn_submit" class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/stocks" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>