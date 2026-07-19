<?php

?>

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0">

                <div class="card-header bg-warning">
                    <h4 class="mb-0">
                        <i class="fa fa-edit"></i>
                        Edit Menu Item
                    </h4>
                </div>

                <div class="card-body">

                    <form action="<?= $base_url; ?>/menuitems/update" method="post">

                        <input
                            type="hidden"
                            name="id"
                            value="<?= $menu->id; ?>"
                        >

                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Category
                            </label>

                            <select
                                name="category_id"
                                class="form-select"
                                required
                            >

                                <option value="">
                                    Select Category
                                </option>

                                <?php foreach ($categories as $category): ?>

                                    <option
                                        value="<?= $category->id; ?>"
                                        <?= ($menu->category_id == $category->id) ? "selected" : ""; ?>
                                    >
                                        <?= $category->name; ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Menu Item Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="<?= $menu->name; ?>"
                                required
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Price
                            </label>

                            <input
                                type="number"
                                name="price"
                                step="0.01"
                                class="form-control"
                                value="<?= $menu->price; ?>"
                                required
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-bold">
                                Status
                            </label>

                            <select
                                name="status"
                                class="form-select"
                                required
                            >

                                <option
                                    value="Available"
                                    <?= ($menu->status == "Available") ? "selected" : ""; ?>
                                >
                                    Available
                                </option>

                                <option
                                    value="Unavailable"
                                    <?= ($menu->status == "Unavailable") ? "selected" : ""; ?>
                                >
                                    Unavailable
                                </option>

                            </select>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a
                                href="<?= $base_url; ?>/menuitems"
                                class="btn btn-secondary"
                            >
                                <i class="fa fa-arrow-left"></i>
                                Back
                            </a>

                            <button
                                type="submit"
                                name="btn_update"
                                class="btn btn-success"
                            >
                                <i class="fa fa-save"></i>
                                Update Menu Item
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>