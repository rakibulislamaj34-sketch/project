<?php
?>

<div class="mb-3">
    <a href="<?= $base_url; ?>/menuitems/create" class="btn btn-primary">
        Create Menu Item
    </a>
</div>

<table class="table table-bordered table-hover align-middle">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Category ID</th>
            <th>Menu Item</th>
            <th>Price</th>
            <th>Status</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>

        <?php if (!empty($data)): ?>

            <?php foreach ($data as $menu): ?>

                <tr>

                    <td><?= $menu->id; ?></td>

                    <td><?= $menu->category_id; ?></td>

                    <td><?= htmlspecialchars($menu->name); ?></td>

                    <td><?= number_format($menu->price, 2); ?></td>

                    <td>
                        <?php if ($menu->status == "Available"): ?>

                            <span class="badge bg-success">
                                Available
                            </span>

                        <?php else: ?>

                            <span class="badge bg-danger">
                                Unavailable
                            </span>

                        <?php endif; ?>
                    </td>

                    <td>

                        <a href="<?= $base_url; ?>/menuitems/edit/<?= $menu->id; ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?= $base_url; ?>/menuitems/delete/<?= $menu->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure you want to delete this menu item?')">
                            Delete
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="6" class="text-center text-danger">
                    No Menu Item Found.
                </td>
            </tr>

        <?php endif; ?>

    </tbody>

</table>