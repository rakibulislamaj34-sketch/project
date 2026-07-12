<?php 
      ?>
<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit Supplier</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/suppliers/update" method="post">

                <!-- Hidden Supplier ID -->
                <input type="hidden"
                       name="Supplier_id"
                       value="<?php echo $supplier->Supplier_id; ?>">

                <div class="mb-3">
                    <label class="form-label">Supplier Name</label>
                    <input type="text"
                           name="supplier_name"
                           class="form-control"
                           value="<?php echo $supplier->supplier_name; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           value="<?php echo $supplier->phone; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           value="<?php echo $supplier->email; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Bank Account</label>
                    <input type="text"
                           name="bank_account"
                           class="form-control"
                           value="<?php echo $supplier->bank_account; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cost Price</label>
                    <input type="number"
                           step="0.01"
                           name="cost_price"
                           class="form-control"
                           value="<?php echo $supplier->cost_price; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Selling Price</label>
                    <input type="number"
                           step="0.01"
                           name="selling_price"
                           class="form-control"
                           value="<?php echo $supplier->selling_price; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit</label>
                    <input type="text"
                           name="unit"
                           class="form-control"
                           value="<?php echo $supplier->unit; ?>"
                           required>
                </div>

                <button type="submit"
                        name="btn_update"
                        class="btn btn-primary">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/suppliers"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>
