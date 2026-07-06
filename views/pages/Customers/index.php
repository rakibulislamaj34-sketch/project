<?php
// print_r($data);
?>

<div class="mb-3">
    <a class="btn btn-primary" href="<?php echo $base_url; ?>/customers/create">
        Create
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>

        <?php
        if (!empty($data)) {
            foreach ($data as $customer) {
        ?>

        <tr>
            <td><?php echo $customer->id; ?></td>
            <td><?php echo $customer->name; ?></td>
            <td><?php echo $customer->phone; ?></td>
            <td><?php echo $customer->address; ?></td>
            <td><?php echo $customer->created_at; ?></td>
            <td><?php echo $customer->updated_at; ?></td>

            <td>
                <a class="btn btn-warning btn-sm"
                   href="<?php echo $base_url; ?>/customers/edit/<?php echo $customer->id; ?>">
                    Edit
                </a>

                <a class="btn btn-danger btn-sm"
                   href="<?php echo $base_url; ?>/customers/delete/<?php echo $customer->id; ?>"
                   onclick="return confirm('Are you sure?')">
                    Delete
                </a>
            </td>
        </tr>

        <?php
            }
        }
        ?>

    </tbody>
</table>