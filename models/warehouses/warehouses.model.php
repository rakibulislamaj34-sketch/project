<?php

class warehouses
{
    public $id;
    public $warehouseid;
    public $name;
    public $manager_name;
    public $userid;
    public $phone;
    public $email;

    public function __construct()
    {
    }

    // Set Data
    public function set($id, $warehouseid, $name, $manager_name, $userid, $phone, $email)
    {
        $this->id = $id;
        $this->warehouseid = $warehouseid;
        $this->name = $name;
        $this->manager_name = $manager_name;
        $this->userid = $userid;
        $this->phone = $phone;
        $this->email = $email;
    }

    // Create
    public function create()
    {
        global $db;

        $stmt = $db->query("INSERT INTO warehouses
        (warehouseid, name, manager_name, userid, phone, email)
        VALUES
        (
            '$this->warehouseid',
            '$this->name',
            '$this->manager_name',
            '$this->userid',
            '$this->phone',
            '$this->email'
        )");

        return $db->insert_id;
    }

    // Update
    public function update()
    {
        global $db;

        $stmt = $db->query("UPDATE warehouses SET
            warehouseid='$this->warehouseid',
            name='$this->name',
            manager_name='$this->manager_name',
            userid='$this->userid',
            phone='$this->phone',
            email='$this->email'
            WHERE id='$this->id'
        ");

        return $stmt;
    }

    // Show All
    public static function all()
    {
        global $db;

        $stmt = $db->query("SELECT * FROM warehouses");

        return array_map(fn($d) => (object)$d, $stmt->fetch_all(MYSQLI_ASSOC));
    }

    // Find
    public static function find($id)
    {
        global $db;

        $stmt = $db->query("SELECT * FROM warehouses WHERE id='$id'");

        return $stmt->fetch_object();
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        return $db->query("DELETE FROM warehouses WHERE id='$id'");
    }
}

?>