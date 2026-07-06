<?php
?>

<div class="container mt-4">

    <h3>Create Product</h3>

    <form action="<?= $base_url; ?>/product/save" method="post"  enctype="multipart/form-data">

        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Purchase Price</label>
            <input type="number" step="0.01" name="purchase_price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sell Price</label>
            <input type="number" step="0.01" name="sell_price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">UOM ID</label>
            <input type="number" name="uom_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" placeholder="photo.jpg">
        </div>

        <div class="mb-3">
            <label class="form-label">Brand ID</label>
            <input type="number" name="brand_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Category ID</label>
            <input type="number" name="category_id" class="form-control" required>
        </div>

        <button type="submit" name="btn_submit" class="btn btn-primary">
            Save
        </button>

        <a href="<?= $base_url; ?>/product" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>