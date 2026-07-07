<?php
// print_r($data);
?>

<div class="mb-3">
    <a href="<?php echo $base_url; ?>/inventorys/create" class="btn btn-primary">
        Create Inventory
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data)) { ?>
            <?php foreach ($data as $inventory) { ?>
                <tr>
                    <td><?php echo $inventory->id; ?></td>
                    <td><?php echo $inventory->product_name; ?></td>
                    <td><?php echo $inventory->quantity; ?></td>
                    <td><?php echo $inventory->created_at; ?></td>
                    <td><?php echo $inventory->updated_at; ?></td>

                    <td>
                        <a href="<?php echo $base_url; ?>/inventorys/edit/<?php echo $inventory->id; ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?php echo $base_url; ?>/inventorys/delete/<?php echo $inventory->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this inventory?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="6" class="text-center">
                    No Inventory Found.
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>