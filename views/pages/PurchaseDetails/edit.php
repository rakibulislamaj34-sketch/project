<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Purchase Details</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/purchasedetails/update" method="post">

                <input type="hidden" name="id" value="<?php echo $data->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Purchase ID</label>
                    <input type="number"
                           name="purchase_id"
                           class="form-control"
                           value="<?php echo $data->purchase_id; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product ID</label>
                    <input type="number"
                           name="product_id"
                           class="form-control"
                           value="<?php echo $data->product_id; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Customer ID</label>
                    <input type="number"
                           name="customer_id"
                           class="form-control"
                           value="<?php echo $data->customer_id; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Product Quantity</label>
                    <input type="number"
                           name="productquantity"
                           class="form-control"
                           value="<?php echo $data->productquantity; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number"
                           step="0.01"
                           name="price"
                           class="form-control"
                           value="<?php echo $data->price; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">VAT</label>
                    <input type="number"
                           step="0.01"
                           name="vat"
                           class="form-control"
                           value="<?php echo $data->vat; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Discount</label>
                    <input type="number"
                           step="0.01"
                           name="discount"
                           class="form-control"
                           value="<?php echo $data->discount; ?>">
                </div>

                <button type="submit" name="btn_submit" class="btn btn-success">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/purchasedetails" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>