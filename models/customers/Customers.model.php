<?php

class Customers
{
    public $id;
    public $name;
    public $phone;
    public $address;

    public function __construct()
    {
    }

    // Set Data
    public function set($id, $name, $phone, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO customers
                (name, phone, address)
                VALUES
                (
                    '$this->name',
                    '$this->phone',
                    '$this->address'
                )";

        if ($db->query($sql)) {
            return $db->insert_id;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Show All
    public static function all()
    {
        global $db;

        $sql = "SELECT * FROM customers";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {

            $customers = $result->fetch_all(MYSQLI_ASSOC);

            return array_map(function ($row) {
                return (object)$row;
            }, $customers);
        }

        return [];
    }

    // Find
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM customers WHERE id='$id'";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {
            return (object)$result->fetch_assoc();
        }

        return null;
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE customers SET
                    name='$this->name',
                    phone='$this->phone',
                    address='$this->address'
                WHERE id='$this->id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        $sql = "DELETE FROM customers WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}
?>