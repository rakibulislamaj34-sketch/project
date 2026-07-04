<?php

class Purchase
{
    public $id;
    public $vendor_id;
    public $status_id;
    public $date;
    public $total;
    public $discount;
    public $address;
    public $vat;
    public $paid_amount;

    // Set Data
    public function set(
        $pid,
        $pvendor_id,
        $pstatus_id,
        $pdate,
        $ptotal,
        $pdiscount,
        $paddress,
        $pvat,
        $ppaid_amount
    ) {
        $this->id = $pid;
        $this->vendor_id = $pvendor_id;
        $this->status_id = $pstatus_id;
        $this->date = $pdate;
        $this->total = $ptotal;
        $this->discount = $pdiscount;
        $this->address = $paddress;
        $this->vat = $pvat;
        $this->paid_amount = $ppaid_amount;
    }

    // Create
    public function save()
    {
        global $db;

        $sql = "INSERT INTO purchase
                (vendor_id, status_id, date, total, discount, address, vat, paid_amount)
                VALUES
                (
                    '$this->vendor_id',
                    '$this->status_id',
                    '$this->date',
                    '$this->total',
                    '$this->discount',
                    '$this->address',
                    '$this->vat',
                    '$this->paid_amount'
                )";

        if ($db->query($sql)) {
            return $db->insert_id;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Read
    public static function showPurchase()
    {
        global $db;

        $sql = "SELECT * FROM purchase";

        $result = $db->query($sql);

        if ($result && $result->num_rows > 0) {
            $purchase = $result->fetch_all(MYSQLI_ASSOC);
            return array_map(fn($row) => (object)$row, $purchase);
        }

        return [];
    }

    // Find
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM purchase WHERE id='$id'";

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

        $sql = "UPDATE purchase SET
                    vendor_id='$this->vendor_id',
                    status_id='$this->status_id',
                    date='$this->date',
                    total='$this->total',
                    discount='$this->discount',
                    address='$this->address',
                    vat='$this->vat',
                    paid_amount='$this->paid_amount'
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

        $sql = "DELETE FROM purchase WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>