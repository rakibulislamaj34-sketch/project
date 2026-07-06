<?php
// employees/create.php
?>

<div class="container mt-4">

    <h3>Create Employee</h3>

    <form action="<?php echo $base_url; ?>/employees/save" method="post">

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Enter Employee Name"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Designation</label>

            <select name="designation" class="form-select" required>
                <option value="">-- Select Designation --</option>
                <option value="Manager">Manager</option>
                <option value="Chef">Chef</option>
                <option value="Waiter">Waiter</option>
                <option value="Cashier">Cashier</option>
                <option value="Cleaner">Cleaner</option>
                <option value="Security">Security</option>
                <option value="Delivery Boy">Delivery Boy</option>
            </select>
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
            <label class="form-label">Salary</label>
            <input
                type="number"
                name="salary"
                class="form-control"
                placeholder="Enter Salary"
                required>
        </div>

        <button type="submit" name="btn_submit" class="btn btn-success">
            Save
        </button>

        <a href="<?php echo $base_url; ?>/employees" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>