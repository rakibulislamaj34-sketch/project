
<div class="container-fluid mt-4">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow border-0">

                <div class="card-header bg-warning">
                    <h4 class="mb-0">
                        Edit UOM
                    </h4>
                </div>

                <div class="card-body">

                    <form action="<?php echo $base_url; ?>/uoms/update" method="post">
                        <?php 
                        print_r($data);
                        ?>

                        <input type="hidden" 
                               name="id" 
                               value="<?php echo $data->id; ?>">
                               


                        <div class="mb-3">

                            <label class="form-label">
                                UOM Name
                            </label>

                            <input 
                                type="text"
                                name="name"
                                class="form-control"
                                value="<?php echo $data->name; ?>"
                                placeholder="Enter UOM Name"
                                required>

                        </div>


                        <div class="d-flex gap-2">

                            <button type="submit"
                                    name="btn_update"
                                    class="btn btn-warning">
                                <i class="bi bi-pencil"></i> Update
                            </button>


                            <a href="<?php echo $base_url; ?>/uoms"
                               class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Cancel
                            </a>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
