

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Supplier List</h4>

            <a href="<?php echo $base_url; ?>/suppliers/create" class="btn btn-light">
                + Add Supplier
            </a>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Supplier Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Bank Account</th>
                        <th>Cost Price</th>
                        <th>Selling Price</th>
                        <th>Unit</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th width="170">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php if (!empty($data)) { ?>

                        <?php foreach ($data as $row) { ?>

                            <tr>

                                <td><?php echo $row->Supplier_id; ?></td>
                                <td><?php echo $row->supplier_name; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->bank_account; ?></td>
                                <td><?php echo $row->cost_price; ?></td>
                                <td><?php echo $row->selling_price; ?></td>
                                <td><?php echo $row->unit; ?></td>
                                <td><?php echo $row->created_at; ?></td>
                                <td><?php echo $row->updated_at; ?></td>

                                <td>

                                    <a href="<?php echo $base_url; ?>/suppliers/edit/<?php echo $row->Supplier_id; ?>"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <a href="<?php echo $base_url; ?>/suppliers/delete/<?php echo $row->Supplier_id; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this supplier?')">
                                        Delete
                                    </a>

                                </td>

                            </tr>

                        <?php } ?>

                    <?php } else { ?>

                        <tr>
                            <td colspan="11" class="text-center text-danger">
                                No Supplier Found.
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

