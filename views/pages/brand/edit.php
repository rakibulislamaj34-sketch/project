<?php
if (!isset($brand) || !$brand) {
    die("Brand not found!");
}

print_r($data);
?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h4 class="mb-0">Edit Brand</h4>
        </div>

        <div class="card-body">

            <form action="<?= $base_url; ?>/brand/update" method="POST">

                <input 
                 type="hidden" 
                 name="id" 
                 value="<?= isset($data->id) ? htmlspecialchars($data->id) : ''; ?>">
                <div class="mb-3">

                    <label class="form-label">
                        Brand Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?= htmlspecialchars($data->name ?? '') ?>"
                        required>

                </div>

                <button
                    type="submit"
                    name="btn_update"
                    class="btn btn-warning">
                    Update
                </button>

                <a
                    href="<?= $base_url; ?>/brand"
                    class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>