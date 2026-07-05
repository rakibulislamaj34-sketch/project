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

    // Set User Data
    public function set($full_name, $email, $password, $role_id, $photo, $status)
    {
        $this->full_name = $full_name;
        $this->email     = $email;
        $this->role_id   = $role_id;
        $this->photo     = $photo;
        $this->status    = $status;

        if (!empty($password)) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $this->password = null;
        }
    }

    // Insert User
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

        return $db->query($sql);
    }

    // Show All Users
    public static function showUser()
    {
        global $db;

        $sql = "SELECT
                    users.*,
                    roles.name AS role_name
                FROM users
                LEFT JOIN roles
                ON users.role_id = roles.id
                ORDER BY users.id DESC";

        $result = $db->query($sql);

        $data = [];

        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }

        return $data;
    }

    // Find User By ID
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM users WHERE id='$id'";

        $result = $db->query($sql);

        return $result->fetch_object();
    }

    // Update User
    public function update($id)
    {
        global $db;

        if ($this->password) {

            $sql = "UPDATE users SET
                        full_name = '$this->full_name',
                        email     = '$this->email',
                        password  = '$this->password',
                        role_id   = '$this->role_id',
                        photo     = '$this->photo',
                        status    = '$this->status'
                    WHERE id='$id'";

        } else {

            $sql = "UPDATE users SET
                        full_name = '$this->full_name',
                        email     = '$this->email',
                        role_id   = '$this->role_id',
                        photo     = '$this->photo',
                        status    = '$this->status'
                    WHERE id='$id'";
        }

        return $db->query($sql);
    }

    // Delete User
    public function delete($id)
    {
        global $db;

        $sql = "DELETE FROM users WHERE id='$id'";

        return $db->query($sql);
    }
}
?>