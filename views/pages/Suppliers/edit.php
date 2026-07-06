<?php
// $supplier contains the supplier data
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h3>Edit Supplier</h3>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/suppliers/update" method="post">

                <input type="hidden" name="id" value="<?php echo $supplier->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Supplier Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?php echo $supplier->name; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        value="<?php echo $supplier->phone; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="<?php echo $supplier->email; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Bank Account</label>
                    <input
                        type="text"
                        name="bank_account"
                        class="form-control"
                        value="<?php echo $supplier->bank_account; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cost Price</label>
                    <input
                        type="number"
                        step="0.01"
                        name="cost_price"
                        class="form-control"
                        value="<?php echo $supplier->cost_price; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Selling Price</label>
                    <input
                        type="number"
                        step="0.01"
                        name="selling_price"
                        class="form-control"
                        value="<?php echo $supplier->selling_price; ?>">
                </div>

                <button type="submit" name="btn_update" class="btn btn-primary">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/suppliers" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>