<?php
// print_r($data);
?>

<div class="mb-3">
    <a href="<?= $base_url; ?>/product/create" class="btn btn-primary">
        Create Product
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Purchase Price</th>
            <th>Sell Price</th>
            <th>UOM ID</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Brand ID</th>
            <th>Category ID</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data)) : ?>
            <?php foreach ($data as $product) : ?>
                <tr>
                    <td><?= $product->id ?></td>
                    <td><?= $product->name ?></td>
                    <td><?= $product->purchase_price ?></td>
                    <td><?= $product->sell_price ?></td>
                    <td><?= $product->uom_id ?></td>
                    <td><?= $product->description ?></td>

                    <td>
                        <?php if (!empty($product->photo)) : ?>
                            <img src="<?= $base_url; ?>/uploads/<?= $product->photo; ?>" width="60" height="60" class="img-thumbnail">
                        <?php else : ?>
                            No Image
                        <?php endif; ?>
                    </td>

                    <td><?= $product->brand_id ?></td>
                    <td><?= $product->category_id ?></td>

                    <td><?= $product->created_at ?></td>
                    <td><?= $product->updated_at ?></td>

                    <td>
                        <a href="<?= $base_url; ?>/product/edit/<?= $product->id; ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?= $base_url; ?>/product/delete/<?= $product->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="12" class="text-center">
                    No Product Found.
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>