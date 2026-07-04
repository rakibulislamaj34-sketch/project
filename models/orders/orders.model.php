<?php

class Orders{

    public $order_id;
    public $customer_id;
    public $table_id;
    public $user_id;
    public $order_date;
    public $total_amount;
    public $order_status;

    public function set(
        $porder_id,
        $pcustomer_id,
        $ptable_id,
        $puser_id,
        $porder_date,
        $ptotal_amount,
        $porder_status
    ){

        $this->order_id = $porder_id;
        $this->customer_id = $pcustomer_id;
        $this->table_id = $ptable_id;
        $this->user_id = $puser_id;
        $this->order_date = $porder_date;
        $this->total_amount = $ptotal_amount;
        $this->order_status = $porder_status;
    }

    // Create
    public function save(){

        global $db;

        $sql = "INSERT INTO orders
        (
            order_id,
            customer_id,
            table_id,
            user_id,
            order_date,
            total_amount,
            order_status
        )
        VALUES
        (
            '$this->order_id',
            '$this->customer_id',
            '$this->table_id',
            '$this->user_id',
            '$this->order_date',
            '$this->total_amount',
            '$this->order_status'
        )";

        if($db->query($sql)){
            echo "Successfully Inserted!";
            return $db->insert_id;
        }

        return false;
    }

    // Read
    public static function showOrders(){

        global $db;

        $sql = "SELECT * FROM orders";

        $stmt = $db->query($sql);

        if($stmt && $stmt->num_rows > 0){

            $array = $stmt->fetch_all(MYSQLI_ASSOC);

            return array_map(fn($row)=>(object)$row,$array);

        }

        return [];
    }

    // Update
    public function update($id){

        global $db;

        $sql = "UPDATE orders SET

        customer_id='$this->customer_id',
        table_id='$this->table_id',
        user_id='$this->user_id',
        order_date='$this->order_date',
        total_amount='$this->total_amount',
        order_status='$this->order_status'

        WHERE order_id='$id'";

        if($db->query($sql)){
            echo "Updated Successfully!";
        }else{
            echo "Update Failed!";
        }
    }

    // Delete
    public function delete($id){

        global $db;

        $sql = "DELETE FROM orders WHERE order_id='$id'";

        if($db->query($sql)){
            echo "Deleted Successfully!";
        }else{
            echo "Delete Failed!";
        }
    }

}

?>