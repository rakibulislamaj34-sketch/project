<div class="container mt-4">

    <h3>Create Vendor</h3>

    <form action="<?php echo $base_url; ?>/vendors/save" method="post">

        <div class="mb-3">
            <label class="form-label">Vendor Name</label>
            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Enter Vendor Name"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input
                type="text"
                name="phone"
                class="form-control"
                placeholder="Enter Phone Number"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea
                name="address"
                class="form-control"
                rows="3"
                placeholder="Enter Address"
                required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter Email Address"
                required>
        </div>

        <button type="submit" name="btn_submit" class="btn btn-success">
            Save
        </button>

        <a href="<?php echo $base_url; ?>/vendors" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>