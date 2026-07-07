<?php
// create.php
?>

<div class="card">
    <div class="card-header">
        <h4>Create Inventory</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo $base_url; ?>/inventorys/save" method="post">

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>

            <button type="submit" name="btn_submit" class="btn btn-success">
                Save
            </button>

            <a href="<?php echo $base_url; ?>/inventorys" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>
</div>