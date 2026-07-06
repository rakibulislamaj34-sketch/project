<?php

class Product
{
    public $id;
    public $name;
    public $purchase_price;
    public $sell_price;
    public $uom_id;
    public $description;
    public $photo;
    public $brand_id;
    public $category_id;

    public function __construct()
    {
    }

    // Set Data
    public function set($id, $name, $purchase_price, $sell_price, $uom_id, $description, $photo, $brand_id, $category_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->purchase_price = $purchase_price;
        $this->sell_price = $sell_price;
        $this->uom_id = $uom_id;
        $this->description = $description;
        $this->photo = $photo;
        $this->brand_id = $brand_id;
        $this->category_id = $category_id;
    }

    // Insert
    public function create()
    {
        global $db;

        $sql = "INSERT INTO product
                (name, purchase_price, sell_price, uom_id, description, photo, brand_id, category_id)
                VALUES
                (
                    '$this->name',
                    '$this->purchase_price',
                    '$this->sell_price',
                    '$this->uom_id',
                    '$this->description',
                    '$this->photo',
                    '$this->brand_id',
                    '$this->category_id'
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

        $sql = "SELECT * FROM product ORDER BY id DESC";

        $result = $db->query($sql);

        $data = [];

        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }

        return $data;
    }

    // Find One
    public static function find($id)
    {
        global $db;

        $sql = "SELECT * FROM product WHERE id='$id'";

        $result = $db->query($sql);

        return $result->fetch_object();
    }

    // Update
    public function update()
    {
        global $db;

        $sql = "UPDATE product SET
                    name='$this->name',
                    purchase_price='$this->purchase_price',
                    sell_price='$this->sell_price',
                    uom_id='$this->uom_id',
                    description='$this->description',
                    photo='$this->photo',
                    brand_id='$this->brand_id',
                    category_id='$this->category_id'
                WHERE id='$this->id'";

        return $db->query($sql);
    }

    // Delete
    public static function delete($id)
    {
        global $db;

        $sql = "DELETE FROM product WHERE id='$id'";

        return $db->query($sql);
    }
}