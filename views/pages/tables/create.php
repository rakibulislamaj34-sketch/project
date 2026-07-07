<div class="container-fluid mt-4">

    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create Table</h4>
                </div>

                <div class="card-body">

                    <form action="<?php echo $base_url; ?>/tables/save" method="post">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Table Number
                            </label>

                            <input
                                type="text"
                                name="table_number"
                                class="form-control"
                                placeholder="Enter Table Number"
                                required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Capacity
                            </label>

                            <input
                                type="number"
                                name="capacity"
                                class="form-control"
                                placeholder="Enter Seating Capacity"
                                min="1"
                                required>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?php echo $base_url; ?>/tables"
                                class="btn btn-outline-secondary">
                                ← Back
                            </a>

                            <button type="submit"
                                name="btn_submit"
                                class="btn btn-primary">
                                Save Table
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>