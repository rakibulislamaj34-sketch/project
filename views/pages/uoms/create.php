
<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Create UOM</h4>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/uoms/save" method="post">

                <div class="mb-3">
                    <label class="form-label">UOM Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Enter UOM Name"
                        required>
                </div>

                <button type="submit"
                        name="btn_submit"
                        class="btn btn-success">
                    Save
                </button>

                <a href="<?php echo $base_url; ?>/uoms"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>
