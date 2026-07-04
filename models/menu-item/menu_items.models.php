<?php

class MenuItems
{
    public $item_id;
    public $category_id;
    public $item_name;
    public $price;
    public $status;

    public function __construct()
    {
    }

    // Set Data
    public function set($item_id, $category_id, $item_name, $price, $status)
    {
        $this->item_id = $item_id;
        $this->category_id = $category_id;
        $this->item_name = $item_name;
        $this->price = $price;
        $this->status = $status;
    }

    // Create
    public function save()
    {
        global $db;

        $stmt = $db->query("
            INSERT INTO menu_item
            (item_id, category_id, item_name, price, status)
            VALUES
            (
                '$this->item_id',
                '$this->category_id',
                '$this->item_name',
                '$this->price',
                '$this->status'
            )
        ");

        return $db->insert_id;
    }

    // Update
    public function update()
    {
        global $db;

        $stmt = $db->query("
            UPDATE menu_item
            SET
                category_id='$this->category_id',
                item_name='$this->item_name',
                price='$this->price',
                status='$this->status'
            WHERE item_id='$this->item_id'
        ");

        return $stmt;
    }

    // Read All
    public static function all()
    {
        global $db;

        $stmt = $db->query("SELECT * FROM menu_item");

        return array_map(
            fn($d) => (object)$d,
            $stmt->fetch_all(MYSQLI_ASSOC)
        );
    }

    // Find One
    public static function find($item_id)
    {
        global $db;

        $stmt = $db->query("SELECT * FROM menu_item WHERE item_id='$item_id'");

        return $stmt->fetch_object();
    }

    // Delete
    public static function delete($item_id)
    {
        global $db;

        return $db->query("DELETE FROM menu_item WHERE item_id='$item_id'");
    }
}

?>