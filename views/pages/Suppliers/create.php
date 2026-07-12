
<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Create Supplier</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/suppliers/save" method="post">

                <div class="mb-3">
                    <label class="form-label">Supplier Name</label>
                    <input type="text"
                           name="supplier_name"
                           class="form-control"
                           placeholder="Enter Supplier Name"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text"
                           name="phone"
                           class="form-control"
                           placeholder="Enter Phone Number"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter Email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Bank Account</label>
                    <input type="text"
                           name="bank_account"
                           class="form-control"
                           placeholder="Enter Bank Account">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cost Price</label>
                    <input type="number"
                           step="0.01"
                           name="cost_price"
                           class="form-control"
                           placeholder="Enter Cost Price"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Selling Price</label>
                    <input type="number"
                           step="0.01"
                           name="selling_price"
                           class="form-control"
                           placeholder="Enter Selling Price"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit</label>
                    <input type="text"
                           name="unit"
                           class="form-control"
                           placeholder="Enter Unit (Kg, Litre, Piece)"
                           required>
                </div>

                <button type="submit"
                        name="btn_submit"
                        class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/suppliers"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>

