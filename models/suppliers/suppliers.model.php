<?php

class Suppliers
{
    public $Supplier_id;
    public $supplier_name;
    public $phone;
    public $email;
    public $bank_account;
    public $cost_price;
    public $selling_price;
    public $unit;

    // Set Data
    public function set(
        $Supplier_id,
        $supplier_name,
        $phone,
        $email,
        $bank_account,
        $cost_price,
        $selling_price,
        $unit
    ) {
        $this->Supplier_id   = $Supplier_id;
        $this->supplier_name = $supplier_name;
        $this->phone         = $phone;
        $this->email         = $email;
        $this->bank_account  = $bank_account;
        $this->cost_price    = $cost_price;
        $this->selling_price = $selling_price;
        $this->unit          = $unit;
    }

    // Create
    public function create()
    {
        global $db;

        $sql = "INSERT INTO suppliers
                (
                    supplier_name,
                    phone,
                    email,
                    bank_account,
                    cost_price,
                    selling_price,
                    unit
                )
                VALUES
                (
                    '$this->supplier_name',
                    '$this->phone',
                    '$this->email',
                    '$this->bank_account',
                    '$this->cost_price',
                    '$this->selling_price',
                    '$this->unit'
                )";

        if ($db->query($sql)) {
            return $db->insert_id;
        }

        die($db->error);
    }

    // Show All
    public static function all()
    {
        global $db;

        $sql = "SELECT * FROM suppliers ORDER BY Supplier_id DESC";

        $result = $db->query($sql);

        $data = [];

        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }

        return $data;
    }

    // Find
    public static function find($Supplier_id)
    {
        global $db;

        $sql = "SELECT * FROM suppliers
                WHERE Supplier_id='$Supplier_id'";

        $result = $db->query($sql);

        return $result->fetch_object();
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE suppliers SET
                    supplier_name='$this->supplier_name',
                    phone='$this->phone',
                    email='$this->email',
                    bank_account='$this->bank_account',
                    cost_price='$this->cost_price',
                    selling_price='$this->selling_price',
                    unit='$this->unit'
                WHERE Supplier_id='$this->Supplier_id'";

        if ($db->query($sql)) {
            return true;
        }

        die($db->error);
    }

    // Delete
    public static function delete($Supplier_id)
    {
        global $db;

        $sql = "DELETE FROM suppliers
                WHERE Supplier_id='$Supplier_id'";

        if ($db->query($sql)) {
            return true;
        }

        die($db->error);
    }
}

?>