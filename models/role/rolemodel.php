<?php
echo "Role Model Loaded";
exit;

class role
{
    public $id;
    public $name;
    public $email;
    public $description;

    // Set Data
    public function set($name, $email, $description)
    {
        $this->name = $name;
        $this->email = $email;
        $this->description = $description;
    }

    // Create
    public function save()
    {
        global $db;

        $sql = "INSERT INTO role
                (name, email, description)
                VALUES
                (
                    '$this->name',
                    '$this->email',
                    '$this->description'
                )";

        if ($db->query($sql)) {
            return $db->insert_id;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Read All
    public static function showrole()
    {
        global $db;

        $sql = "SELECT * FROM role";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {

            $roles = $result->fetch_all(MYSQLI_ASSOC);

            return array_map(function ($row) {
                return (object)$row;
            }, $roles);
        }

        return [];
    }

    // Find
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM role WHERE id='$id'";

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

        $sql = "UPDATE role SET
                    name='$this->name',
                    email='$this->email',
                    description='$this->description'
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

        $sql = "DELETE FROM role WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>