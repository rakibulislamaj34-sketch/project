<div class="container-fluid mt-4">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0">

                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Create Order</h4>
                </div>

                <div class="card-body">

                    <form action="<?php echo $base_url; ?>/orders/save" method="post">

                        <!-- Customer -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Customer</label>

                            <select name="customer_id" class="form-select" required>
                                <option value="">-- Select Customer --</option>

                                <?php foreach ($customer as $data) { ?>
                                    <option value="<?php echo $data->id; ?>">
                                        <?php echo $data->name; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <!-- Table -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Table</label>

                            <select name="table_id" class="form-select" required>
                                <option value="">-- Select Table --</option>

                                <?php foreach ($table as $data) { ?>
                                    <option value="<?php echo $data->id; ?>">
                                        Table <?php echo $data->table_number; ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <!-- User -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">User Name</label>
                           
                            <select name="table_id" class="form-select" required>
                                <option value="">-- Select UserName --</option>

                                <?php foreach ($users as $data) { ?>
                                    <option value="<?php echo $data->id; ?>">
                                       <?php echo $data->full_name; ?>
                                    </option>
                                <?php } ?>

                            </select>

                        </div>

                        <!-- Cost Price -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Cost Price</label>
                            <input type="number" step="0.01" name="cost_price" class="form-control" required>
                        </div>

                        <!-- Order Date -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Order Date</label>
                            <input type="date" name="order_date" class="form-control" required>
                        </div>

                        <!-- Total Amount -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Total Amount</label>
                            <input type="number" step="0.01" name="total_amount" class="form-control" required>
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Order Status</label>

                            <select name="order_status" class="form-select" required>
                                <option value="Pending">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?php echo $base_url; ?>/orders" class="btn btn-outline-secondary">
                                ← Back
                            </a>

                            <button type="submit" name="btn_submit" class="btn btn-success">
                                Save Order
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>