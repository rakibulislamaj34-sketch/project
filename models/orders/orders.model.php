<?php

class Orders
{
    public $id;
    public $customer_id;
    public $table_id;
    public $user_id;
    public $order_date;
    public $cost_price;
    public $total_amount;
    public $order_status;

    public function __construct()
    {
    }

    // Set Data
    public function set(
        $id,
        $customer_id,
        $table_id,
        $user_id,
        $order_date,
        $cost_price,
        $total_amount,
        $order_status
    ) {
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->table_id = $table_id;
        $this->user_id = $user_id;
        $this->order_date = $order_date;
        $this->cost_price = $cost_price;
        $this->total_amount = $total_amount;
        $this->order_status = $order_status;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO orders
                (
                    customer_id,
                    table_id,
                    user_id,
                    order_date,
                    cost_price,
                    total_amount,
                    order_status
                )
                VALUES
                (
                    '$this->customer_id',
                    '$this->table_id',
                    '$this->user_id',
                    '$this->order_date',
                    '$this->cost_price',
                    '$this->total_amount',
                    '$this->order_status'
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

        $sql = "SELECT * FROM orders";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {

            $orders = $result->fetch_all(MYSQLI_ASSOC);

            return array_map(function ($row) {
                return (object)$row;
            }, $orders);
        }

        return [];
    }

    // Find
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM orders WHERE id='$id'";

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

        $sql = "UPDATE orders SET
                    customer_id='$this->customer_id',
                    table_id='$this->table_id',
                    user_id='$this->user_id',
                    order_date='$this->order_date',
                    cost_price='$this->cost_price',
                    total_amount='$this->total_amount',
                    order_status='$this->order_status'
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

        $sql = "DELETE FROM orders WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>