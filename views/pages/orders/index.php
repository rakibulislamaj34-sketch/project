<?php

?>

<div class="mb-3">
    <a class="btn btn-primary" href="<?php echo $base_url; ?>/orders/create">
        Create
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Customer ID</th>
            <th>Table ID</th>
            <th>User ID</th>
            <th>Cost Price</th>
            <th>Order Date</th>
            <th>Total Amount</th>
            <th>Order Status</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>

    <?php
    if (!empty($data)) {
        foreach ($data as $order) {
    ?>

        <tr>
            <td><?php echo $order->id; ?></td>
            <td><?php echo $order->customer_id; ?></td>
            <td><?php echo $order->table_id; ?></td>
            <td><?php echo $order->user_id; ?></td>
            <td><?php echo $order->cost_price; ?></td>
            <td><?php echo $order->order_date; ?></td>
            <td><?php echo $order->total_amount; ?></td>
            <td><?php echo $order->order_status; ?></td>
            <td><?php echo $order->created_at; ?></td>
            <td><?php echo $order->updated_at; ?></td>

            <td>
                <a class="btn btn-warning btn-sm"
                   href="<?php echo $base_url; ?>/orders/edit/<?php echo $order->id; ?>">
                    Edit
                </a>

                <a class="btn btn-danger btn-sm"
                   href="<?php echo $base_url; ?>/orders/delete/<?php echo $order->id; ?>"
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