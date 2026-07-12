<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Create Inventory</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/inventory/save" method="post">

                <div class="mb-3">
                    <label class="form-label">Inventory ID</label>
                    <input
                        type="text"
                        name="inventory_id"
                        class="form-control"
                        required>
                </div>

               <div class="mb-3">
    <label class="form-label">Supplier</label>

    <select name="Supplier_id" class="form-select" required>

        <option value="">Select Supplier</option>

        <?php foreach ($Supplier as $supplier) { ?>

            <option value="<?php echo $supplier->Supplier_id; ?>">
                <?php echo $supplier->supplier_name; ?>
            </option>

        <?php } ?>

    </select>

</div>

                <div class="mb-3">
                    <label class="form-label">Ingredient Name</label>
                    <input
                        type="text"
                        name="ingredient_name"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input
                        type="number"
                        name="quantity"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit</label>

                    <select name="unit" class="form-select" required>
                        <option value="">Select Unit</option>
                        <option value="Kg">Kg</option>
                        <option value="Gram">Gram</option>
                        <option value="Liter">Liter</option>
                        <option value="Ml">Ml</option>
                        <option value="Piece">Piece</option>
                        <option value="Packet">Packet</option>
                    </select>
                </div>

                <button type="submit" name="btn_submit" class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/inventory" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>