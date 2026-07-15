<?php
?>

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-warning text-dark">

                    <h4 class="mb-0">
                        Edit Menu Item
                    </h4>

                </div>

                <div class="card-body">

                    <form action="<?= $base_url; ?>/menuitems/update" method="post">

                        <input type="hidden"
                               name="id"
                               value="<?= $menu->id; ?>">

                        <div class="mb-3">

                            <label class="form-label">
                                Category
                            </label>

                            <select name="category_id"
                                    class="form-select"
                                    required>

                                <option value="">Select Category</option>

                                <?php foreach($categories as $category): ?>

                                    <option value="<?= $category->id; ?>"
                                        <?= ($menu->category_id == $category->id) ? "selected" : ""; ?>>

                                        <?= $category->name; ?>

                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Menu Item Name
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   value="<?= $menu->name; ?>"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Price
                            </label>

                            <input type="number"
                                   step="0.01"
                                   name="price"
                                   class="form-control"
                                   value="<?= $menu->price; ?>"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Status
                            </label>

                            <select name="status"
                                    class="form-select"
                                    required>

                                <option value="Available"
                                    <?= ($menu->status == "Available") ? "selected" : ""; ?>>
                                    Available
                                </option>

                                <option value="Unavailable"
                                    <?= ($menu->status == "Unavailable") ? "selected" : ""; ?>>
                                    Unavailable
                                </option>

                            </select>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?= $base_url; ?>/menuitems"
                               class="btn btn-secondary">
                                Back
                            </a>

                            <button type="submit"
                                    name="btn_update"
                                    class="btn btn-success">
                                Update Menu Item
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>