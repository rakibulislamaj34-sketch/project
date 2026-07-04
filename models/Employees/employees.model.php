<?php

class Employees
{
    public $employee_id;
    public $name;
    public $designation;
    public $phone;
    public $salary;

    public function __construct()
    {
    }

    public function set($employee_id, $name, $designation, $phone, $salary)
    {
        $this->employee_id = $employee_id;
        $this->name = $name;
        $this->designation = $designation;
        $this->phone = $phone;
        $this->salary = $salary;
    }

    // Insert
    public function save()
    {
        global $db;

        $db->query("
            INSERT INTO employees
            (employee_id, name, designation, phone, salary)
            VALUES
            ('$this->employee_id',
             '$this->name',
             '$this->designation',
             '$this->phone',
             '$this->salary')
        ");

        return $db->insert_id;
    }

    // Update
    public function update()
    {
        global $db;

        return $db->query("
            UPDATE employees
            SET
                name='$this->name',
                designation='$this->designation',
                phone='$this->phone',
                salary='$this->salary'
            WHERE employee_id='$this->employee_id'
        ");
    }

    // Read All
    public static function all()
    {
        global $db;

        $stmt = $db->query("SELECT * FROM employees");

        return array_map(
            fn($d) => (object)$d,
            $stmt->fetch_all(MYSQLI_ASSOC)
        );
    }

    // Find One
    public static function find($employee_id)
    {
        global $db;

        $stmt = $db->query("SELECT * FROM employees WHERE employee_id='$employee_id'");

        return $stmt->fetch_object();
    }

    // Delete
    public static function delete($employee_id)
    {
        global $db;

        return $db->query("DELETE FROM employees WHERE employee_id='$employee_id'");
    }
}

?>