<?php
// print_r($data);
?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Purchase</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/purchase/update" method="post">

                <!-- Hidden ID -->
                <input type="hidden" name="id" value="<?php echo $data->id ?? ''; ?>">

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Vendor ID</label>
                        <input
                            type="number"
                            name="vendor_id"
                            class="form-control"
                            value="<?php echo $data->vendor_id ?? ''; ?>"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status ID</label>
                        <input
                            type="number"
                            name="status_id"
                            class="form-control"
                            value="<?php echo $data->status_id ?? ''; ?>"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Purchase Date</label>
                        <input
                            type="date"
                            name="date"
                            class="form-control"
                            value="<?php echo $data->date ?? ''; ?>"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Total</label>
                        <input
                            type="number"
                            step="0.01"
                            name="total"
                            class="form-control"
                            value="<?php echo $data->total ?? ''; ?>"
                            required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Discount</label>
                        <input
                            type="number"
                            step="0.01"
                            name="discount"
                            class="form-control"
                            value="<?php echo $data->discount ?? ''; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">VAT</label>
                        <input
                            type="number"
                            step="0.01"
                            name="vat"
                            class="form-control"
                            value="<?php echo $data->vat ?? ''; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Paid Amount</label>
                        <input
                            type="number"
                            step="0.01"
                            name="payed_amount"
                            class="form-control"
                            value="<?php echo $data->payed_amount ?? ''; ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Address</label>
                        <input
                            type="text"
                            name="address"
                            class="form-control"
                            value="<?php echo $data->address ?? ''; ?>">
                    </div>

                </div>

                <button type="submit" name="btn_submit" class="btn btn-warning">
                    Update Purchase
                </button>

                <a href="<?php echo $base_url; ?>/purchase" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>
</div>