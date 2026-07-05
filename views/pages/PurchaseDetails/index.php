<?php
// print_r($data);
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Purchase Details List</h3>

        <a class="btn btn-primary" href="<?php echo $base_url; ?>/purchasedetails/create">
            + Create Purchase Details
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>SL</th>
                        <th>Purchase ID</th>
                        <th>Product ID</th>
                        <th>Customer ID</th>
                        <th>Product Quantity</th>
                        <th>Price</th>
                        <th>VAT</th>
                        <th>Discount</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                <?php

                if (!empty($data)) {

                    foreach ($data as $key => $details) {

                        $sl = $key + 1;

                        echo "
                        <tr>
                            <td>{$sl}</td>
                            <td>{$details->purchase_id}</td>
                            <td>{$details->product_id}</td>
                            <td>{$details->customer_id}</td>
                            <td>{$details->productquantity}</td>
                            <td>{$details->price}</td>
                            <td>{$details->vat}</td>
                            <td>{$details->discount}</td>

                            <td>
                                <a href='$base_url/purchasedetails/edit?id={$details->purchase_id}'
                                   class='btn btn-warning btn-sm'>
                                    Edit
                                </a>

                                <a href='$base_url/purchasedetails/delete?id={$details->purchase_id}'
                                   class='btn btn-danger btn-sm'
                                   onclick=\"return confirm('Are you sure you want to delete this record?')\">
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
                            No Purchase Details Found.
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