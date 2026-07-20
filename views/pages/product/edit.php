
<div class="container-fluid mt-4">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow border-0">


                <div class="card-header bg-primary text-white">

                    <h4 class="mb-0">
                        Create Product
                    </h4>

                </div>


                <div class="card-body">


                    <form action="<?= $base_url; ?>/product/save" method="post">


                        <div class="mb-3">

                            <label class="form-label">
                                Product Name
                            </label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   placeholder="Enter Product Name"
                                   required>

                        </div>



                        <div class="row">


                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Purchase Price
                                </label>

                                <input type="number"
                                       step="0.01"
                                       name="purchase_price"
                                       class="form-control"
                                       placeholder="Purchase Price"
                                       required>

                            </div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Sell Price
                                </label>

                                <input type="number"
                                       step="0.01"
                                       name="sell_price"
                                       class="form-control"
                                       placeholder="Sell Price"
                                       required>

                            </div>


                        </div>




                        <div class="mb-3">

                            <label class="form-label">
                                UOM
                            </label>


                            <select name="uom_id"
                                    class="form-select"
                                    required>


                                <option value="">
                                    Select UOM
                                </option>


                                <?php foreach($uoms as $uom): ?>

                                    <option value="<?= $uom->id; ?>">

                                        <?= $uom->name; ?>

                                    </option>


                                <?php endforeach; ?>


                            </select>


                        </div>





                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>


                            <textarea name="description"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Enter Description"></textarea>


                        </div>





                     <div class="mb-3">
    <label class="form-label">Current Photo</label><br>
    
    <?php if (!empty($product->photo)): ?>
        <img src="<?= $base_url; ?>/img/<?= $product->photo; ?>"
             width="120"
             class="img-thumbnail mb-2"
             alt="Current Image">
    <?php else: ?>
        <span class="text-muted d-block mb-2">No photo available</span>
    <?php endif; ?>
    
    <input type="file" name="photo" class="form-control">
</div>





                        
<div class="mb-3">
    <label class="form-label">Brand</label>

    <select name="brand_id" class="form-select" required>
        <option value="">Select Brand</option>

        <?php foreach($brands as $brand): ?>
            <option value="<?= $brand->id; ?>"
                <?= (isset($product->brand_id) && $product->brand_id == $brand->id) ? 'selected' : ''; ?>>
                <?= $brand->name; ?>
            </option>
        <?php endforeach; ?>

    </select>
</div>



                            <div class="col-md-6 mb-3">

                                <label class="form-label">
                                    Category ID
                                </label>


                                <input type="number"
                                       name="category_id"
                                       class="form-control"
                                       placeholder="Category ID"
                                       required>


                            </div>


                        </div>





                        <button type="submit"
                                name="btn_submit"
                                class="btn btn-primary">

                            Save

                        </button>



                        <a href="<?= $base_url; ?>/product"
                           class="btn btn-secondary">

                            Cancel

                        </a>



                    </form>


                </div>


            </div>


        </div>


    </div>


</div>
