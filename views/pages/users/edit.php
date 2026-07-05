<form method="post"
      action="<?= $base_url; ?>/users/update"
      enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $data->id; ?>">

    <div class="mb-3">
        <label>Full Name</label>
        <input type="text"
               name="full_name"
               class="form-control"
               value="<?= $data->full_name; ?>">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email"
               name="email"
               class="form-control"
               value="<?= $data->email; ?>">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password"
               name="password"
               class="form-control"
               placeholder="Leave blank to keep old password">
    </div>

    <div class="mb-3">
        <label>Role</label>

        <select name="role_id" class="form-control">

            <?php foreach($roles as $role){ ?>

                <option value="<?= $role->id; ?>"
                    <?= ($role->id==$data->role_id)?"selected":""; ?>>

                    <?= $role->name; ?>

                </option>

            <?php } ?>

        </select>
    </div>

    <div class="mb-3">

        <label>Current Photo</label><br>

        <?php if(!empty($data->photo)){ ?>

            <img src="<?= $base_url; ?>/uploads/users/<?= $data->photo; ?>"
                 width="80"
                 class="img-thumbnail">

        <?php } ?>

    </div>

    <div class="mb-3">

        <label>Change Photo</label>

        <input type="file"
               name="photo"
               class="form-control">

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status" class="form-control">

            <option value="Active"
                <?=($data->status=="Active")?"selected":"";?>>

                Active

            </option>

            <option value="Inactive"
                <?=($data->status=="Inactive")?"selected":"";?>>

                Inactive

            </option>

        </select>

    </div>

    <button class="btn btn-success" name="btn_submit">

        Update

    </button>

</form>