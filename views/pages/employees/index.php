<?php
// print_r($data);
?>

<div class="mb-3">
    <a href="<?php echo $base_url; ?>/employees/create" class="btn btn-primary">
        Create Employee
    </a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Phone</th>
            <th>Salary</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data)) { ?>
            <?php foreach ($data as $employee) { ?>
                <tr>
                    <td><?php echo $employee->id; ?></td>
                    <td><?php echo $employee->name; ?></td>
                    <td><?php echo $employee->designation; ?></td>
                    <td><?php echo $employee->phone; ?></td>
                    <td><?php echo $employee->salary; ?></td>
                    <td><?php echo $employee->created_at; ?></td>
                    <td><?php echo $employee->updated_at; ?></td>
                    <td>
                        <a href="<?php echo $base_url; ?>/employees/edit/<?php echo $employee->id; ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?php echo $base_url; ?>/employees/delete/<?php echo $employee->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this employee?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="8" class="text-center">
                    No Employee Found.
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>