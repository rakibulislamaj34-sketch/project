<?php

class purchasedetails
{
    public $purchase_id;
    public $product_id;
    public $customer_id;
    public $productquantity;
    public $price;
    public $vat;
    public $discount;

    public function __construct()
    {
    }

    public function set($purchase_id, $product_id, $customer_id, $productquantity, $price, $vat, $discount)
    {
        $this->purchase_id = $purchase_id;
        $this->product_id = $product_id;
        $this->customer_id = $customer_id;
        $this->productquantity = $productquantity;
        $this->price = $price;
        $this->vat = $vat;
        $this->discount = $discount;
    }

    // Insert
    public function save()
    {
        global $db;

        $sql = "INSERT INTO purchasedetails
                (purchase_id, product_id, customer_id, productquantity, price, vat, discount)
                VALUES
                (
                    '$this->purchase_id',
                    '$this->product_id',
                    '$this->customer_id',
                    '$this->productquantity',
                    '$this->price',
                    '$this->vat',
                    '$this->discount'
                )";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }

    // Show All
    public static function showPurchaseDetails()
{
    global $db;

    $sql = "SELECT * FROM purchasedetails";

    $result = $db->query($sql);

    if ($result && $result->num_rows > 0) {

        $purchaseDetails = $result->fetch_all(MYSQLI_ASSOC);

        return array_map(function ($row) {
            return (object)$row;
        }, $purchaseDetails);
    }

    return [];
}

    // Find One
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM purchasedetails WHERE id='$id'";

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

        $sql = "UPDATE purchasedetails SET
                    purchase_id='$this->purchase_id',
                    product_id='$this->product_id',
                    customer_id='$this->customer_id',
                    productquantity='$this->productquantity',
                    price='$this->price',
                    vat='$this->vat',
                    discount='$this->discount'
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

        $sql = "DELETE FROM purchasedetails WHERE id='$id'";

        if ($db->query($sql)) {
            return true;
        } else {
            echo $db->error;
            return false;
        }
    }
}

?>