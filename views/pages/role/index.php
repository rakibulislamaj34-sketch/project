<?php
// print_r($data);
?>

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Role List</h3>

        <a class="btn btn-primary" href="<?php echo $base_url; ?>/role/create">
            + Create Role
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover table-striped">

                <thead class="table-dark">
                    <tr>
                        <th>SL</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E mail</th>
                       
                        <th>Description</th>
                        <th width="180">Action</th>
                    </tr>
                </thead>

                <tbody>

                <?php

                if (!empty($data)) {

                    foreach ($data as $key => $role) {

                        $sl = $key + 1;

                        echo "
                        <tr>
                            <td>{$sl}</td>
                            <td>{$role->id}</td>
                            <td>{$role->name}</td>
                            <td>{$role->email}</td>
                      
                            <td>{$role->description}</td>

                            <td>
                                <a href='$base_url/role/edit?id={$role->id}'
                                   class='btn btn-warning btn-sm'>
                                    Edit
                                </a>

                                <a href='$base_url/role/delete?id={$role->id}'
                                   class='btn btn-danger btn-sm'
                                   onclick=\"return confirm('Are you sure you want to delete this role?')\">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        ";
                    }

                } else {

                    echo "
                    <tr>
                        <td colspan='6' class='text-center text-danger'>
                            No Role Found.
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