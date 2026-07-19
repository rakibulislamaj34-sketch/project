<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-warning text-dark">
            <h4>Edit Category</h4>
        </div>

        <div class="card-body">

            <form action="<?= $base_url ?>/categories/update" method="post">

                <input type="hidden" name="id" value="<?= $Categories->id ?>">

                <div class="mb-3">
                    <label class="form-label">Categories Name</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?= $Categories->name ?>"
                        required>
                </div>

                <button type="submit" class="btn btn-success">
                    Update
                </button>

                <a href="<?= $base_url ?>/categories"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>