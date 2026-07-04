<?php
// purchase/create.php
?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Create Purchase</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/purchase/save" method="post">

                <div class="row">

                    <!-- Vendor ID -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Vendor ID</label>
                        <input type="number"
                            name="vendor_id"
                            class="form-control"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>

                        <select name="status_id" class="form-select" required>
                            <option value="1" >
                                Active
                            </option>

                            <option value="0">
                                Inactive
                            </option>
                        </select>
                    </div>

                    <!-- Purchase Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Purchase Date</label>
                        <input type="date"
                            name="date"
                            class="form-control"
                            required>
                    </div>

                    <!-- Total -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Total</label>
                        <input type="number"
                            step="0.01"
                            name="total"
                            class="form-control"
                            required>
                    </div>

                    <!-- Discount -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Discount</label>
                        <input type="number"
                            step="0.01"
                            name="discount"
                            class="form-control"
                            value="0">
                    </div>

                    <!-- VAT -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">VAT</label>
                        <input type="number"
                            step="0.01"
                            name="vat"
                            class="form-control"
                            value="0">
                    </div>

                    <!-- Paid Amount -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Paid Amount</label>
                        <input type="number"
                            step="0.01"
                            name="paid_amount"
                            class="form-control"
                            value="0">
                    </div>

                    <!-- Address -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address</label>
                        <input type="text"
                            name="address"
                            class="form-control">
                    </div>

                </div>

                <button type="submit"
                    name="btn_submit"
                    class="btn btn-success">
                    Save Purchase
                </button>

                <a href="<?php echo $base_url; ?>/purchase"
                    class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>