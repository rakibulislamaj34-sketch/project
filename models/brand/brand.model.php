<?php

class Brand
{
    public $id;
    public $name;

    public function __construct()
    {
    }

    public function set($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function create()
    {
        global $db;
        $sql = "INSERT INTO brand (name) VALUES ('$this->name')";
        if ($db->query($sql)) {
            return $db->insert_id;
        }
        die($db->error);
    }

    public static function all()
    {
        global $db;
        $sql = "SELECT * FROM brand ORDER BY id DESC";
        $result = $db->query($sql);
        $data = [];
        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }
        return $data;
    }

    public static function find($id)
    {
        global $db;
        $id = (int)$id;
        $sql = "SELECT * FROM brand WHERE id = $id";
        $result = $db->query($sql);
        return $result->fetch_object(); 
    }

    public function update()
    {
        global $db;
        $this->id = (int)$this->id;
        $this->name = $db->real_escape_string($this->name);
        
        $sql = "UPDATE brand SET name='$this->name' WHERE id=$this->id";
        if ($db->query($sql)) {
            return true;
        }
        die($db->error);
    }

    public static function delete($id)
    {
        global $db;
        $sql = "DELETE FROM brand WHERE id='$id'";
        if ($db->query($sql)) {
            return true;
        }
        die($db->error);
    }
}