
<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Inventory List</h3>

            <a href="<?php echo $base_url; ?>/inventory/create" class="btn btn-success">
                + Add Inventory
            </a>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Inventory ID</th>
                        <th>Supplier</th>
                        <th>Ingredient Name</th>
                        <th>Quantity</th>
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

                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->inventory_id; ?></td>
                            <!-- <td><?php echo $row->Suppliers_id; ?></td> -->
                            <td><?php echo $row->ingredient_name; ?></td>
                            <td><?php echo $row->quantity; ?></td>
                            <td><?php echo $row->unit; ?></td>
                            <td><?php echo $row->created_at; ?></td>
                            <td><?php echo $row->updated_at; ?></td>

                            <td>

                                <a href="<?php echo $base_url; ?>/inventory/edit/<?php echo $row->id; ?>"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="<?php echo $base_url; ?>/inventory/delete/<?php echo $row->id; ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Are you sure?')">
                                    Delete
                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                <?php } else { ?>

                    <tr>
                        <td colspan="9" class="text-center text-danger">
                            No Inventory Found.
                        </td>
                    </tr>

                <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>
