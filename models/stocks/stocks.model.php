<?php

class stocks
{

    public $product_id;
    public $quantity;
    public $transaction_id;
    public $warehouse_id;

    public function __construct()
    {
    }

    public function set($product_id, $quantity, $transaction_id, $warehouse_id)
    {

        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->transaction_id = $transaction_id;
        $this->warehouse_id = $warehouse_id;
    }

    // Insert
    public function save()
    {
        global $db;

        $sql = "INSERT INTO stocks
                (product_id, quantity, transaction_id, warehouse_id)
                VALUES
                (
                
                    '$this->product_id',
                    '$this->quantity',
                    '$this->transaction_id',
                    '$this->warehouse_id'
                )";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Show All
    public static function showStocks()
    {
        global $db;

        $sql = "SELECT * FROM stocks";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {

            $stocks = $result->fetch_all(MYSQLI_ASSOC);

            return array_map(function ($row) {
                return (object)$row;
            }, $stocks);
        }

        return [];
    }

    // Find One
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM stocks WHERE id='$id'";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {
            return (object)$result->fetch_assoc();
        }

        return null;
    }

    // Update
    public function update($id)
    {
        global $db;

        $sql = "UPDATE stocks SET
                    product_id='$this->product_id',
                    quantity='$this->quantity',
                    transaction_id='$this->transaction_id',
                    warehouse_id='$this->warehouse_id'
                WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Delete
    public function delete($id)
    {
        global $db;

        $sql = "DELETE FROM stocks WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>