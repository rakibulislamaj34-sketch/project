<?php

class MenuItems
{
    public $id;
    public $category_id;
    public $name;
    public $price;
    public $status;

    public function __construct() {}

    // Set Data
    public function set($id, $category_id, $name, $price, $status)
    {
        $this->id          = $id;
        $this->category_id = $category_id;
        $this->name        = $name;
        $this->price       = $price;
        $this->status      = $status;
    }

    // Create
    public function save()
    {
        global $db;

        $sql = "INSERT INTO menu_item
                (
                    category_id,
                    name,
                    price,
                    status
                )
                VALUES
                (
                    '$this->category_id',
                    '$this->name',
                    '$this->price',
                    '$this->status'
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

        $sql = "SELECT *
                FROM menu_item
                ORDER BY id DESC";

        $result = $db->query($sql);

        $data = [];

        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }

        return $data;
    }

    // Find By ID
    public static function find($id)
    {
        global $db;

        $sql = "SELECT *
                FROM menu_item
                WHERE id='$id'";

        $result = $db->query($sql);

        return $result->fetch_object();
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE menu_item
                SET
                    category_id='$this->category_id',
                    name='$this->name',
                    price='$this->price',
                    status='$this->status'
                WHERE id='$this->id'";

        if ($db->query($sql)) {
            return true;
        }

        die($db->error);
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        $sql = "DELETE FROM menu_item
                WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        }

        die($db->error);
    }
}