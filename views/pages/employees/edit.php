
<?php
if (isset($employees->employees)) {
    $employees = $employees->employees;
}
?>

<div class="container mt-4">

    <h3>Edit Employees</h3>

    <form action="<?php echo $base_url; ?>/employees/update" method="post">

        <input type="hidden" name="id" value="<?php echo $employees->id; ?>">

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="<?php echo $employees->name; ?>"
                   required>
        </div>
<div class="mb-3">
    <label class="form-label">Designation</label>

    <select name="designation" class="form-control" required>
        <option value="">-- Select Designation --</option>

        <option value="Manager"
            <?php if ($employees->designation == "Manager") echo "selected"; ?>>
            Manager
        </option>

        <option value="Chef"
            <?php if ($employees->designation == "Chef") echo "selected"; ?>>
            Chef
        </option>

        <option value="Waiter"
            <?php if ($employees->designation == "Waiter") echo "selected"; ?>>
            Waiter
        </option>

        <option value="Cashier"
            <?php if ($employees->designation == "Cashier") echo "selected"; ?>>
            Cashier
        </option>

        <option value="Cleaner"
            <?php if ($employees->designation == "Cleaner") echo "selected"; ?>>
            Cleaner
        </option>

        <option value="Security"
            <?php if ($employees->designation == "Security") echo "selected"; ?>>
            Security
        </option>

        <option value="Delivery Boy"
            <?php if ($employees->designation == "Delivery Boy") echo "selected"; ?>>
            Delivery Boy
        </option>
    </select>
</div>

        <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="text"
                   name="phone"
                   class="form-control"
                   value="<?php echo $employees->phone; ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Salary</label>
            <input type="number" step="any" name="salary" class="form-control" value="<?php echo htmlspecialchars($employees->salary ?? '0', ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>

        <button type="submit" name="btn_update" class="btn btn-primary">
            Update
        </button>

        <a href="<?php echo $base_url; ?>/employees" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>