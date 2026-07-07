<?php

class ProductController
{
    // Show All
    public function index()
    {
        $data = Product::all();

        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        view("");
    }

    // Save
    public function save()
    {
        // print_r($_POST);
        if (isset($_POST["btn_submit"])) {

                $product = new Product();
                $product->name=$_POST["name"];
                $product->purchase_price=$_POST["purchase_price"];
                $product->sell_price=$_POST["sell_price"];
                $product->uom_id=$_POST["uom_id"];
                $product->description=$_POST["description"];
                $product->photo= upload($_FILES["photo"], "img", $_POST["name"]);  
                $product->brand_id=$_POST["brand_id"];
                $product->category_id=$_POST["category_id"];
               

                print_r( $product->create());

           redirect("product");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $product = Product::find($id);

        view("", compact(""));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $product = new Product();

            $product->set(
                $_POST["id"],
                $_POST["name"],
                $_POST["purchase_price"],
                $_POST["sell_price"],
                $_POST["uom_id"],
                $_POST["description"],
                $_POST["photo"],
                $_POST["brand_id"],
                $_POST["category_id"]
            );

            $product->update();

            redirect("product");
        }
    }

    // Delete
    public function delete($id)
    {
        Product::delete($id);

        redirect("product");
    }
}