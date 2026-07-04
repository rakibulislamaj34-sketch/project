<?php
class orders{
    public order_id;
    public cumstomer_id;
    public	table_id;
    public	user_id	;
    public  order_data;
    public	total_amount;
    public	order_status;	

    public function set($order_id, $pcumstomer_id, $ptable_id, $puser_id, $porder_data,$ptotal_amount,$porder_status){
        $this->order_id = $porder_id;
        $this->cumstomer_id = $pcumstomer_id;
        $this->table_id = $ptable_id;
        $this->user_id = $puser_id;
        $this->order_data = $porder_data;
        $this->total_amount = $ptotal_amount;
        $this->order_status = $porder_status;
    }
      // create 
    public function save(){
        global $db;
        $sql = "INSERT INTO customers ($order_id, $table_id, $user_id,$order_data,$total_amount,$order_status) VALUES ('$this->$order_id', '$this->cumstomer_id', '$this->table_id', '$this-> $puser_id', '$this->$porder_data', '$this->$ptotal_amount', '$this->$porder_status',)";
        $stmt = $db->query($sql);
        if($stmt){
            echo "Successfully Inserted!";
            return $stmt->insrted_id;
        }
    }

        // read
    public static function showorders(){
        global $db;
        $sql = "SELECT * FROM orders";
        $stmt = $db->query($sql);
        if($stmt && $stmt->num_rows>0){
            $arrayFormat = $stmt->fetch_all(MYSQLI_ASSOC);
            return array_map(fn($data) => (object) $data, $arrayFormat);
        }
        else{
            return null;
        }
    }
       // update
    public function update($id){
        global $db;
        $sql = "UPDATE orders SET '$this->$order_id', '$this->cumstomer_id', '$this->table_id', '$this-> $puser_id', '$this->$porder_data', '$this->$ptotal_amount', '$this->$porder_status', WHERE id=$id";
        $stmt = $db->query($sql);
        if ($stmt) {
            redirect();
            exit;
        } else {
            echo "Failed to update data.";
        }
    }

     // delete
    public function delete($id){
        global $db;
        $sql = "DELETE FROM orders WHERE id=$id";
        $stmt = $db->query($sql);
        if (!$stmt) {
            echo "Failed to delete data!";
        }
        return $stmt;
    }







}







?>