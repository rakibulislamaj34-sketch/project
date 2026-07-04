<?php

class User{
    public id;
    public name;
    public email;
    public password;
    
    public function set($pname, $pemail, $ppassword){
        $this->name = $pname;
        $this->email = $pemail;
        $this->password = $ppassword;
    }

    // create 
    public function save(){
        global $db;
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$this->name', '$this->email', '$this->password')";
        $stmt = $db->query($sql);
        if($stmt){
            echo "Successfully Inserted!";
            return $stmt->insrted_id;
        }
    }

    // read
    public static function showUser(){
        global $db;
        $sql = "SELECT * FROM users";
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
        $sql = "UPDATE users SET name='$this->name', email='$this->email', password='$this->password' WHERE id=$id";
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