<?php
// print_r($data);
?>

<div class="mb-3">
    <a class="btn btn-primary" href="<?php echo $base_url; ?>/users/create">Create</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>SL</th>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role ID</th>
            <th>Photo</th>
            <th>Status</th>
            <th width="180">Action</th>
        </tr>
    </thead>

    <tbody>

        <?php

        foreach ($data as $key => $user) {

            $key++;

            echo "
            <tr>
                <td>$key</td>
                <td>$user->id</td>
                <td>$user->full_name</td>
                <td>$user->email</td>
                <td>$user->role_id</td>
                <td>$user->photo</td>
                <td>$user->status</td>

                <td>
                    <a class='btn btn-warning btn-sm' href='$base_url/users/edit/$user->id'>Edit</a>

                    <a class='btn btn-danger btn-sm'
                       href='$base_url/users/delete/$user->id'
                       onclick=\"return confirm('Are you sure?')\">
                       Delete
                    </a>
                </td>
            </tr>
            ";
        }

        ?>

    </tbody>
</table>