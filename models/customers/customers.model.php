<?php
class customers {
    public id;
    public name;
    public phone;
    public address;

    public function set($pname, $pphone, $paddress){
        $this->name = $pname;
        $this->phone = $pphone;
        $this->address = $paddress;
    }
    // create 
    public function save(){
        global $db;
        $sql = "INSERT INTO customers (name, email, password) VALUES ('$this->name', '$this->phone', '$this->address')";
        $stmt = $db->query($sql);
        if($stmt){
            echo "Successfully Inserted!";
            return $stmt->insrted_id;
        }
    }
    // read
    public static function showcustomers(){
        global $db;
        $sql = "SELECT * FROM customers";
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
        $sql = "UPDATE customers SET name='$this->name', email='$this->email', password='$this->password' WHERE id=$id";
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
        $sql = "DELETE FROM customers WHERE id=$id";
        $stmt = $db->query($sql);
        if (!$stmt) {
            echo "Failed to delete data!";
        }
        return $stmt;
    }

}










?>