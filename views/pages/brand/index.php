<div class="mb-3">
    <a href="<?= $base_url; ?>/brand/create" class="btn btn-primary">
        Create Brand
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Brand Name</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="170">Action</th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($brands as $brand){ ?>

        <tr>
            <td><?= $brand->id ?></td>
            <td><?= $brand->name ?></td>
            <td><?= $brand->created_at ?></td>
            <td><?= $brand->updated_at ?></td>

            <td>
                <a href="<?= $base_url; ?>/brand/edit/<?= $brand->id ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="<?= $base_url; ?>/brand/delete/<?= $brand->id ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Are you sure?')">
                    Delete
                </a>
            </td>
        </tr>

    <?php } ?>

    </tbody>

</table>