<?php
// print_r($data);
?>

<div class="mb-3">
    <a href="<?php echo $base_url; ?>/warehouses/create" class="btn btn-primary">
        Create Warehouse
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Warehouse ID</th>
            <th>Name</th>
            <th>Manager Name</th>
            <th>User ID</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data)) { ?>
            <?php foreach ($data as $warehouse) { ?>
                <tr>
                    <td><?php echo $warehouse->id; ?></td>
                    <td><?php echo $warehouse->warehouseid; ?></td>
                    <td><?php echo $warehouse->name; ?></td>
                    <td><?php echo $warehouse->manager_name; ?></td>
                    <td><?php echo $warehouse->userid; ?></td>
                    <td><?php echo $warehouse->phone; ?></td>
                    <td><?php echo $warehouse->email; ?></td>
                    <td><?php echo $warehouse->created_at; ?></td>
                    <td><?php echo $warehouse->updated_at; ?></td>

                    <td>
                        <a href="<?php echo $base_url; ?>/warehouses/edit/<?php echo $warehouse->id; ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?php echo $base_url; ?>/warehouses/delete/<?php echo $warehouse->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this warehouse?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="10" class="text-center">
                    No Warehouse Found.
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>