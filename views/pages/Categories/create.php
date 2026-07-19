<div class="container mt-4">

    <div class="card">

        <div class="card-header bg-primary text-white">
            <h4>Create Category</h4>
        </div>

        <div class="card-body">

            <form action="<?= $base_url ?>/categories/store" method="post">

                <div class="mb-3">
                    <label class="form-label">
                        Category Name
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter Category Name"
                        required>
                </div>

                <button type="submit" class="btn btn-success">
                    Save Category
                </button>

                <a href="<?= $base_url ?>/categories"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>