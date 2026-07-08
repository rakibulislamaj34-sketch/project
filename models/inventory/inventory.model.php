<?php

class Inventory
{
    public $id;
    public $inventory_id;
    public $supplier_id;
    public $ingredient_name;
    public $quantity;
    public $unit;

    public function __construct()
    {
    }

    // Set Data
    public function set(
        $id,
        $inventory_id,
        $supplier_id,
        $ingredient_name,
        $quantity,
        $unit
    ) {
        $this->id = $id;
        $this->inventory_id = $inventory_id;
        $this->supplier_id = $supplier_id;
        $this->ingredient_name = $ingredient_name;
        $this->quantity = $quantity;
        $this->unit = $unit;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO inventory
                (
                    inventory_id,
                    supplier_id,
                    ingredient_name,
                    quantity,
                    unit
                )
                VALUES
                (
                    '$this->inventory_id',
                    '$this->supplier_id',
                    '$this->ingredient_name',
                    '$this->quantity',
                    '$this->unit'
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

        $sql = "SELECT * FROM inventory";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {

            $inventory = $result->fetch_all(MYSQLI_ASSOC);

            return array_map(function ($row) {
                return (object)$row;
            }, $inventory);
        }

        return [];
    }

    // Find
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM inventory WHERE id='$id'";

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

        $sql = "UPDATE inventory SET
                    inventory_id='$this->inventory_id',
                    supplier_id='$this->supplier_id',
                    ingredient_name='$this->ingredient_name',
                    quantity='$this->quantity',
                    unit='$this->unit'
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

        $sql = "DELETE FROM inventory WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>