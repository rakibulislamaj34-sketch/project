<?php

?>

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Category List</h3>

        <a href="<?= $base_url; ?>/categories/create" class="btn btn-primary">
            + Create Category
        </a>
    </div>

    <table class="table table-bordered table-hover">

        <thead class="table-dark">
            <tr>
                <th width="80">ID</th>
                <th>Category Name</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th width="180">Action</th>
            </tr>
        </thead>

        <tbody>

        <?php
        if($data && $data->num_rows>0){

            while($row=$data->fetch_object()){
        ?>

            <tr>

                <td><?= $row->id ?></td>

                <td><?= $row->name ?></td>

                <td><?= $row->created_at ?></td>

                <td><?= $row->updated_at ?></td>

                <td>

                    <a href="<?= $base_url ?>/categories/edit?id=<?= $row->id ?>"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="<?= $base_url ?>/categories/delete?id=<?= $row->id ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure?')">
                        Delete
                    </a>

                </td>

            </tr>

        <?php
            }
        }else{
        ?>

            <tr>
                <td colspan="5" class="text-center">
                    No Category Found
                </td>
            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>