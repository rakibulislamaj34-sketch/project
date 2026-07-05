<div class="mb-3">
    <a href="<?= $base_url; ?>/users/create"
       class="btn btn-primary">

        Create User

    </a>
</div>

<table class="table table-bordered table-hover">

    <thead>

        <tr>

            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Photo</th>
            <th>Status</th>
            <th width="180">Action</th>

        </tr>

    </thead>

    <tbody>

    <?php

    $sl=1;

    foreach($data as $user){

    ?>

    <tr>

        <td><?= $sl++; ?></td>

        <td><?= $user->full_name; ?></td>

        <td><?= $user->email; ?></td>

        <td><?= $user->role_name; ?></td>

        <td>

            <?php if(!empty($user->photo)){ ?>

                <img src="<?= $base_url; ?>/img/<?= $user->photo; ?>"
                     width="60"
                     height="60"
                     class="img-thumbnail">

            <?php }else{ ?>

                No Photo

            <?php } ?>

        </td>

        <td><?= $user->status; ?></td>

        <td>

            <a href="<?= $base_url; ?>/users/edit/<?= $user->id; ?>"
               class="btn btn-warning btn-sm">

                Edit

            </a>

            <a href="<?= $base_url; ?>/users/delete/<?= $user->id; ?>"
               class="btn btn-danger btn-sm"
               onclick="return confirm('Delete this user?')">

                Delete

            </a>

        </td>

    </tr>

    <?php } ?>

    </tbody>

</table>