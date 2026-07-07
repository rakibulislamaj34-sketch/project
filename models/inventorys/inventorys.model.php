<?php

class inventorys
{
    public $id;
    public $product_name;
    public $quantity;

    public function __construct()
    {
    }

    // Set Data
    public function set($id, $product_name, $quantity)
    {
        $this->id = $id;
        $this->product_name = $product_name;
        $this->quantity = $quantity;
    }

    // Create
    public function create()
    {
        global $db;

        $stmt = $db->query("INSERT INTO inventorys
        (product_name, quantity)
        VALUES
        (
            '$this->product_name',
            '$this->quantity'
        )");

        return $db->insert_id;
    }

    // Update
    public function update()
    {
        global $db;

        $stmt = $db->query("UPDATE inventorys SET
            product_name='$this->product_name',
            quantity='$this->quantity'
            WHERE id='$this->id'
        ");

        return $stmt;
    }

    // Show All
    public static function all()
    {
        global $db;

        $stmt = $db->query("SELECT * FROM inventorys");

        return array_map(fn($d) => (object)$d, $stmt->fetch_all(MYSQLI_ASSOC));
    }

    // Find
    public static function find($id)
    {
        global $db;

        $stmt = $db->query("SELECT * FROM inventorys WHERE id='$id'");

        return $stmt->fetch_object();
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        return $db->query("DELETE FROM inventorys WHERE id='$id'");
    }
}

?>