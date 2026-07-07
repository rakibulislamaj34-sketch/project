<?php

class tables
{
    public $id;
    public $table_number;
    public $capacity;

    public function __construct()
    {
    }

    // Set 
    public function set($id, $table_number, $capacity)
    {
        $this->id = $id;
        $this->table_number = $table_number;
        $this->capacity = $capacity;
    }

    // Create
    public function create()
    {
        global $db;

        $db->query("
            INSERT INTO tables
            (table_number, capacity)
            VALUES
            (
                '$this->table_number',
                '$this->capacity'
            )
        ");

        return $db->insert_id;
    }

    // Update
    public function update()
    {
        global $db;

        return $db->query("
            UPDATE tables SET
                table_number = '$this->table_number',
                capacity = '$this->capacity'
            WHERE id = '$this->id'
        ");
    }

    // Show All
    public static function all()
    {
        global $db;

        $result = $db->query("SELECT * FROM tables ORDER BY id DESC");

        return array_map(
            fn($row) => (object)$row,
            $result->fetch_all(MYSQLI_ASSOC)
        );
    }

    // Find
    public static function find($id)
    {
        global $db;

        $result = $db->query("SELECT * FROM tables WHERE id='$id'");

        return $result->fetch_object();
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        return $db->query("DELETE FROM tables WHERE id='$id'");
    }
}