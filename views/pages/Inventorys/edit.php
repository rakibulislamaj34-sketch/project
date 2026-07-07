<?php
// print_r($data);
?>

<div class="card">
    <div class="card-header">
        <h4>Edit Inventory</h4>
    </div>

    <div class="card-body">

        <form action="<?php echo $base_url; ?>/inventorys/update" method="post">

            <input type="hidden" name="id" value="<?php echo $data->id; ?>">

            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text"
                       name="product_name"
                       class="form-control"
                       value="<?php echo $data->product_name; ?>"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number"
                       name="quantity"
                       class="form-control"
                       value="<?php echo $data->quantity; ?>"
                       required>
            </div>

            <button type="submit" name="btn_submit" class="btn btn-primary">
                Update
            </button>

            <a href="<?php echo $base_url; ?>/inventorys" class="btn btn-secondary">
                Back
            </a>

        </form>

    </div>
</div>