<?php

class Users
{
    public $id;
    public $full_name;
    public $email;
    public $password;
    public $role_id;
    public $photo;
    public $status;

    // Set Data
    public function set($pfull_name, $pemail, $ppassword, $prole_id, $pphoto, $pstatus)
    {
        $this->full_name = $pfull_name;
        $this->email = $pemail;
        $this->password = password_hash($ppassword, PASSWORD_DEFAULT);
        $this->role_id = $prole_id;
        $this->photo = $pphoto;
        $this->status = $pstatus;
    }

    // Create
    public function save()
    {
        global $db;

        $sql = "INSERT INTO users
                (full_name, email, password, role_id, photo, status)
                VALUES
                (
                    '$this->full_name',
                    '$this->email',
                    '$this->password',
                    '$this->role_id',
                    '$this->photo',
                    '$this->status'
                )";

        if ($db->query($sql)) {
            return $db->insert_id;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Read All Users
    public static function showUser()
    {
        global $db;

        $sql = "SELECT * FROM users";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {
            $users = $result->fetch_all(MYSQLI_ASSOC);
            return array_map(fn($row) => (object)$row, $users);
        }

        return [];
    }

    // Find Single User
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM users WHERE id='$id'";

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

        $sql = "UPDATE users SET
                    full_name='$this->full_name',
                    email='$this->email',
                    password='$this->password',
                    role_id='$this->role_id',
                    photo='$this->photo',
                    status='$this->status'
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

        $sql = "DELETE FROM users WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>