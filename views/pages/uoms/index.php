<?php  ?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

            <h4 class="mb-0">UOM List</h4>

            <a href="<?php echo $base_url; ?>/uoms/create" class="btn btn-light">
                + Add UOM
            </a>

        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>UOM Name</th>
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
                                <td><?php echo $row->name; ?></td>
                                <td><?php echo $row->created_at; ?></td>
                                <td><?php echo $row->updated_at; ?></td>

                                <td>

                                    <a href="<?php echo $base_url; ?>/uoms/edit/<?php echo $row->id; ?>"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <a href="<?php echo $base_url; ?>/uoms/delete/<?php echo $row->id; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this record?')">
                                        Delete
                                    </a>

                                </td>

                            </tr>

                        <?php } ?>

                    <?php } else { ?>

                        <tr>
                            <td colspan="5" class="text-center text-danger">
                                No UOM Found.
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>
