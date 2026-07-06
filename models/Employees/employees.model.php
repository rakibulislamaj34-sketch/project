<?php

class Employees
{
    public $id;
    public $name;
    public $designation;
    public $phone;
    public $salary;

    // Set Data
    public function set($id, $name, $designation, $phone, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->designation = $designation;
        $this->phone = $phone;
        $this->salary = $salary;
    }

    // Insert
    public function create()
    {
        global $db;


        $sql = "INSERT INTO employees
                (name, designation, phone, salary)
                VALUES
                (
                    '$this->name',
                    '$this->designation',
                    '$this->phone',
                    '$this->salary'
                )";

        if ($db->query($sql)) {
            return $db->insert_id;
        }

        die($db->error);
    }

    // Show All
    public static function all()
    {
        global $db;

        $sql = "SELECT * FROM employees ORDER BY id DESC";

        $result = $db->query($sql);

        $data = [];

        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }

        return $data;
    }

    // Find
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM employees WHERE id='$id'";

        $result = $db->query($sql);

        return $result->fetch_object();
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE employees SET
                    name='$this->name',
                    designation='$this->designation',
                    phone='$this->phone',
                    salary='$this->salary'
                WHERE id='$this->id'";

        return $db->query($sql);
    }

// Delete
    public static function delete($id)
    {
        global $db;

        $sql = "DELETE FROM employees WHERE id='$id'";

        return $db->query($sql);
    }
}    