<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <h3>Create Order</h3>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/orders/save" method="post">

                <div class="mb-3">
                    <label class="form-label">Customer</label>

                    <select name="customer_id" class="form-control" required>
                        <option value="">-- Select Customer --</option>

                        <?php foreach ($customer as $data) { ?>
                            <option value="<?php echo $data->id; ?>">
                                <?php echo $data->name; ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Table ID</label>
                    <input type="number" name="table_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="number" name="user_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cost Price</label>
                    <input type="number" step="0.01" name="cost_price" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Order Date</label>
                    <input type="date" name="order_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Amount</label>
                    <input type="number" step="0.01" name="total_amount" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Order Status</label>

                    <select name="order_status" class="form-control" required>
                        <option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
                </div>

                <button type="submit" name="btn_submit" class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/orders" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>