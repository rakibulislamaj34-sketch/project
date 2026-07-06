<?php

class Suppliers
{
    public $id;
    public $name;
    public $phone;
    public $email;
    public $bank_account;
    public $cost_price;
    public $selling_price;

    public function __construct()
    {
    }

    public function set($id, $name, $phone, $email, $bank_account, $cost_price, $selling_price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->bank_account = $bank_account;
        $this->cost_price = $cost_price;
        $this->selling_price = $selling_price;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO suppliers
        (id, name, phone, email, bank_account, cost_price, selling_price)
        VALUES
        (
            '$this->id',
            '$this->name',
            '$this->phone',
            '$this->email',
            '$this->bank_account',
            '$this->cost_price',
            '$this->selling_price'
        )";

        $db->query($sql);

        return $db->insert_id;
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE suppliers SET
                name='$this->name',
                phone='$this->phone',
                email='$this->email',
                bank_account='$this->bank_account',
                cost_price='$this->cost_price',
                selling_price='$this->selling_price'
                WHERE id='$this->id'";

        return $db->query($sql);
    }

    // Show All
    public static function all()
    {
        global $db;

        $stmt = $db->query("SELECT * FROM suppliers");

        return array_map(fn($d) => (object)$d, $stmt->fetch_all(MYSQLI_ASSOC));
    }

    // Find
    public static function find($id)
    {
        global $db;

        $stmt = $db->query("SELECT * FROM suppliers WHERE id='$id'");

        return $stmt->fetch_object();
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        return $db->query("DELETE FROM suppliers WHERE id='$id'");
    }
}

?>