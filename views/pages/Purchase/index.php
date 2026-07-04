<?php
// print_r($data);
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Purchase List</h3>

        <a class="btn btn-primary" href="<?php echo $base_url; ?>/purchase/create">
            + Create Purchase
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>SL</th>
                        <th>ID</th>
                        <th>Vendor ID</th>
                        <th>Status ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Discount</th>
                        <th>VAT</th>
                        <th>Paid Amount</th>
                        <th>Address</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                <?php

                if (!empty($data)) {

                    foreach ($data as $key => $purchase) {

                        $sl = $key + 1;

                        echo "
                        <tr>
                            <td>{$sl}</td>
                            <td>{$purchase->id}</td>
                            <td>{$purchase->vendor_id}</td>
                            <td>{$purchase->status_id}</td>
                            <td>{$purchase->date}</td>
                            <td>{$purchase->total}</td>
                            <td>{$purchase->discount}</td>
                            <td>{$purchase->vat}</td>
                            <td>{$purchase->paid_amount	}</td>
                            <td>{$purchase->address}</td>

                            <td>
                                <a href='$base_url/purchase/edit?id={$purchase->id}'
                                   class='btn btn-warning btn-sm'>
                                    Edit
                                </a>

                                <a href='$base_url/purchase/delete?id={$purchase->id}'
                                   class='btn btn-danger btn-sm'
                                   onclick=\"return confirm('Are you sure you want to delete this purchase?')\">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        ";
                    }

                } else {

                    echo "
                    <tr>
                        <td colspan='11' class='text-center text-danger'>
                            No Purchase Found.
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