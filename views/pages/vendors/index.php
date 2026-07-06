<?php
// print_r($data);
?>

<div class="mb-3">
    <a href="<?php echo $base_url; ?>/vendors/create" class="btn btn-primary">
        Create Vendor
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Vendor Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data)) { ?>
            <?php foreach ($data as $vendor) { ?>
                <tr>
                    <td><?php echo $vendor->id; ?></td>
                    <td><?php echo $vendor->name; ?></td>
                    <td><?php echo $vendor->phone; ?></td>
                    <td><?php echo $vendor->address; ?></td>
                    <td><?php echo $vendor->email; ?></td>
                    <td><?php echo $vendor->created_at; ?></td>
                    <td><?php echo $vendor->updated_at; ?></td>

                    <td>
                        <a href="<?php echo $base_url; ?>/vendors/edit/<?php echo $vendor->id; ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?php echo $base_url; ?>/vendors/delete/<?php echo $vendor->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this vendor?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="8" class="text-center">
                    No Vendor Found.
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>