<?php
// Product List
?>

<div class="mb-3">
    <a href="<?= $base_url; ?>/product/create" class="btn btn-primary">
        Create Product
    </a>
</div>

<table class="table table-bordered table-hover align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Purchase Price</th>
            <th>Sell Price</th>
            <th>UOM</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>

        <?php if (!empty($data)) : ?>

            <?php foreach ($data as $product) : ?>

                <tr>

                    <td><?= $product->id ?></td>

                    <td><?= htmlspecialchars($product->name) ?></td>

                    <td><?= $product->purchase_price ?></td>

                    <td><?= $product->sell_price ?></td>

                    <td><?= $product->uom_id ?></td>

                    <td><?= htmlspecialchars($product->description) ?></td>

                    <td class="text-center">
                        <?php if (!empty($product->photo)) : ?>
                            <img src="<?= $base_url; ?>/img/<?= $product->photo; ?>"
                                alt="Product"
                                width="70"
                                height="70"
                                class="img-thumbnail">
                        <?php else : ?>
                            <span class="text-danger">No Image</span>
                        <?php endif; ?>
                    </td>

                    <td><?= $product->brand_id ?></td>

                    <td><?= $product->category_id ?></td>

                    <td><?= $product->created_at ?></td>

                    <td><?= $product->updated_at ?></td>

                    <td>
                        <a href="<?= $base_url; ?>/product/edit/<?= $product->id; ?>"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?= $base_url; ?>/product/delete/<?= $product->id; ?>"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this product?')">
                            Delete
                        </a>
                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else : ?>

            <tr>
                <td colspan="12" class="text-center text-danger">
                    No Product Found.
                </td>
            </tr>

        <?php endif; ?>

    </tbody>

</table>