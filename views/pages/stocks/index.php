<?php
// print_r($data);
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Stocks List</h3>

        <a class="btn btn-primary" href="<?php echo $base_url; ?>/stocks/create">
            + Create Stock
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>SL</th>
                        <th>ID</th>
                        <th>Product ID</th>
                        <th>Quantity</th>
                        <th>Transaction ID</th>
                        <th>Warehouse ID</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                <?php

                if (!empty($data)) {

                    foreach ($data as $key => $stock) {

                        $sl = $key + 1;

                        echo "
                        <tr>
                            <td>{$sl}</td>
                            <td>{$stock->id}</td>
                            <td>{$stock->product_id}</td>
                            <td>{$stock->quantity}</td>
                            <td>{$stock->transaction_id}</td>
                            <td>{$stock->warehouse_id}</td>
                            <td>{$stock->created_at}</td>
                            <td>{$stock->updated_at}</td>

                            <td>
                                <a href='$base_url/stocks/edit?id={$stock->id}'
                                   class='btn btn-warning btn-sm'>
                                    Edit
                                </a>

                                <a href='$base_url/stocks/delete?id={$stock->id}'
                                   class='btn btn-danger btn-sm'
                                   onclick=\"return confirm('Are you sure you want to delete this stock?')\">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        ";
                    }

                } else {

                    echo "
                    <tr>
                        <td colspan='9' class='text-center text-danger'>
                            No Stock Found.
                        </td>
                    </tr>
                    ";

                }

                ?>

                </tbody>

            </table>

        </div>
    </div>

</div>