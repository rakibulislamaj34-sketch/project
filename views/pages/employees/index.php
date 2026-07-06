<?php
// print_r($data);
?>

<div class="mb-3">
    <a href="<?= $base_url; ?>/employees/create" class="btn btn-primary">
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
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($data)) : ?>
            <?php foreach ($data as $employee) : ?>
                <tr>
                    <td><?= $employee->id ?></td>
                    <td><?= $employee->name ?></td>
                    <td><?= $employee->designation ?></td>
                    <td><?= $employee->phone ?></td>
                    <td><?= $employee->salary ?></td>
                    <td><?= $employee->created_at ?></td>
                    <td><?= $employee->updated_at ?></td>
                    <td>
                        <a href="<?= $base_url; ?>/employees/edit/<?= $employee->id; ?>" class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <a href="<?= $base_url; ?>/employees/delete/<?= $employee->id; ?>"
                           class="btn btn-sm btn-danger"
                           onclick="return confirm('Are you sure you want to delete this employee?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="8" class="text-center">No Employee Found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>