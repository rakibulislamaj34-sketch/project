<?php
// print_r($data);
?>

<div class="mb-3">
    <a class="btn btn-primary" href="<?php echo $base_url; ?>/suppliers/create">
        Create
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Bank Account</th>
            <th>Cost Price</th>
            <th>Selling Price</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $supplier) { ?>
            <tr>
                <td><?php echo $supplier->id; ?></td>
                <td><?php echo $supplier->name; ?></td>
                <td><?php echo $supplier->phone; ?></td>
                <td><?php echo $supplier->email; ?></td>
                <td><?php echo $supplier->bank_account; ?></td>
                <td><?php echo $supplier->cost_price; ?></td>
                <td><?php echo $supplier->selling_price; ?></td>

                <td><?php echo $supplier->created_at; ?></td>
                <td><?php echo $supplier->updated_at; ?></td>

                <td>
                    <a class="btn btn-warning btn-sm"
                        href="<?php echo $base_url; ?>/suppliers/edit/<?php echo $supplier->id; ?>">
                        Edit
                    </a>

                    <a class="btn btn-danger btn-sm"
                        href="<?php echo $base_url; ?>/suppliers/delete/<?php echo $supplier->id; ?>"
                        onclick="return confirm('Are you sure?')">
                        Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>