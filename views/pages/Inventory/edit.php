<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit Inventory</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/inventory/update" method="post">

                <input type="hidden" name="id" value="<?php echo $Inventory->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Inventory ID</label>
                    <input
                        type="text"
                        name="inventory_id"
                        class="form-control"
                        value="<?php echo $Inventory->inventory_id; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Supplier</label>

                    <select name="supplier_id" class="form-select" required>

                        <option value="">Select Supplier</option>

                        <?php foreach ($Supplier as $supplier) { ?>

                            <option
                                value="<?php echo $supplier->id; ?>"
                                <?php echo ($supplier->id == $Inventory->supplier_id) ? "selected" : ""; ?>>

                                <?php echo $supplier->name; ?>

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
                        value="<?php echo $Inventory->ingredient_name; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input
                        type="number"
                        name="quantity"
                        class="form-control"
                        value="<?php echo $Inventory->quantity; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Unit</label>

                    <select name="unit" class="form-select" required>

                        <option value="Kg" <?php if ($Inventory->unit == "Kg") echo "selected"; ?>>Kg</option>
                        <option value="Gram" <?php if ($Inventory->unit == "Gram") echo "selected"; ?>>Gram</option>
                        <option value="Liter" <?php if ($Inventory->unit == "Liter") echo "selected"; ?>>Liter</option>
                        <option value="Ml" <?php if ($Inventory->unit == "Ml") echo "selected"; ?>>Ml</option>
                        <option value="Piece" <?php if ($Inventory->unit == "Piece") echo "selected"; ?>>Piece</option>
                        <option value="Packet" <?php if ($Inventory->unit == "Packet") echo "selected"; ?>>Packet</option>

                    </select>
                </div>

                <button type="submit" name="btn_update" class="btn btn-primary">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/inventory" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>