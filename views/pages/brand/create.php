<?php
?>

<div class="container-fluid mt-4">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">

                    <h4 class="mb-0">
                        Create Brand
                    </h4>

                </div>

                <div class="card-body">

                    <form action="<?= $base_url; ?>/brand/save" method="post">

                        <div class="mb-3">

                            <label class="form-label">
                                Brand Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Enter Brand Name"
                                required>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?= $base_url; ?>/brand"
                               class="btn btn-secondary">
                                Back
                            </a>

                            <button
                                type="submit"
                                name="btn_submit"
                                class="btn btn-primary">

                                Save Brand

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>