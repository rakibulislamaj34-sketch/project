<?php
// print_r($data);
?>

<div class="container-fluid mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold">Table Management</h3>

        <a href="<?php echo $base_url; ?>/tables/create" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Create Table
        </a>
    </div>

    <div class="card shadow border-0">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Table List</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Table Number</th>
                            <th>Capacity</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th width="180">Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php if (!empty($data)) { ?>

                            <?php foreach ($data as $table) { ?>

                                <tr>

                                    <td class="text-center">
                                        <?php echo $table->id; ?>
                                    </td>

                                    <td>
                                        <?php echo $table->table_number; ?>
                                    </td>

                                    <td class="text-center">
                                        <span class="badge bg-success">
                                            <?php echo $table->capacity; ?>
                                        </span>
                                    </td>

                                    <td>
                                        <?php echo $table->created_at; ?>
                                    </td>

                                    <td>
                                        <?php echo $table->updated_at; ?>
                                    </td>

                                    <td class="text-center">

                                        <a href="<?php echo $base_url; ?>/tables/edit/<?php echo $table->id; ?>"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="<?php echo $base_url; ?>/tables/delete/<?php echo $table->id; ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure you want to delete this record?')">
                                            Delete
                                        </a>

                                    </td>

                                </tr>

                            <?php } ?>

                        <?php } else { ?>

                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    No Data Found
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>