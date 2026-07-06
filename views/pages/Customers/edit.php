<?php
// print_r($customer);
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h3>Edit Customer</h3>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/customers/update" method="post">

                <input type="hidden" name="id" value="<?php echo $customer->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Customer Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="<?php echo $customer->name; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input
                        type="text"
                        name="phone"
                        class="form-control"
                        value="<?php echo $customer->phone; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea
                        name="address"
                        class="form-control"
                        rows="3"
                        required><?php echo $customer->address; ?></textarea>
                </div>

                <button type="submit" name="btn_update" class="btn btn-primary">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/customers" class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>
    </div>

</div>