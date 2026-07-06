<?php
if (isset($product->product)) {
    $product = $product->product;
}
?>

<div class="container mt-4">

    <h3>Edit Product</h3>

    <form action="<?= $base_url; ?>/product/update" method="post">

        <input type="hidden" name="id" value="<?= $product->id; ?>">

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="<?= $product->name; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Purchase Price</label>
            <input type="number"
                   step="0.01"
                   name="purchase_price"
                   class="form-control"
                   value="<?= $product->purchase_price; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sell Price</label>
            <input type="number"
                   step="0.01"
                   name="sell_price"
                   class="form-control"
                   value="<?= $product->sell_price; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">UOM ID</label>
            <input type="number"
                   name="uom_id"
                   class="form-control"
                   value="<?= $product->uom_id; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="3"><?= $product->description; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="text"
                   name="photo"
                   class="form-control"
                   value="<?= $product->photo; ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Brand ID</label>
            <input type="number"
                   name="brand_id"
                   class="form-control"
                   value="<?= $product->brand_id; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category ID</label>
            <input type="number"
                   name="category_id"
                   class="form-control"
                   value="<?= $product->category_id; ?>"
                   required>
        </div>

        <button type="submit" name="btn_update" class="btn btn-primary">
            Update
        </button>

        <a href="<?= $base_url; ?>/product" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>