<?php

class Vendors
{
    public $id;
    public $name;
    public $phone;
    public $address;
    public $email;

    public function __construct()
    {
    }

    // Set Data
    public function set($id, $name, $phone, $address, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO vendors
                (name, phone, address, email)
                VALUES
                (
                    '$this->name',
                    '$this->phone',
                    '$this->address',
                    '$this->email'
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

        $sql = "SELECT * FROM vendors ORDER BY id DESC";

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

        $sql = "SELECT * FROM vendors WHERE id='$id'";

        $result = $db->query($sql);

        return $result->fetch_object();
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE vendors SET
                    name='$this->name',
                    phone='$this->phone',
                    address='$this->address',
                    email='$this->email'
                WHERE id='$this->id'";

        return $db->query($sql);
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        $sql = "DELETE FROM vendors WHERE id='$id'";

        return $db->query($sql);
    }
}

?>