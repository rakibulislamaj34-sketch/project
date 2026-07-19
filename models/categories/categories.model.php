<?php

class categories
{
    public $id;
    public $name;

    public function __construct()
    {
    }

    // Set Data
    public function set($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO categories
                (
                    name
                )
                VALUES
                (
                    '$this->name'
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

        $sql = "SELECT * FROM categories ORDER BY id DESC";

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

    $id = (int)$id;

    $sql = "SELECT * FROM categories WHERE id = $id";

    $result = $db->query($sql);

    // return $result->fetch_object();
}

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE categories SET
                    name='$this->name'
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

        $sql = "DELETE FROM categories WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        }

        die($db->error);
    }
}

?>