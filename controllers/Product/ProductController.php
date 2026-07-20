<?php

class ProductController
{
    // Show All Products
    public function index()
    {
        $data = Product::all();

        view("", compact("data"));
    }

    // Create Product Form
    public function create()
    {
        $uoms = Uoms::all();
        $brands = Brand::all();

        view(
            "",
            compact("uoms", "brands")
        );
    }

    // Save Product
    public function save()
    {
        if (isset($_POST["btn_submit"])) {
            $photo = "";

            if (!empty($_FILES["photo"]["name"])) {
                $photo = File::upload($_FILES["photo"], "img", time());
            }

            $product = new Product();
            $product->set(
                "",
                $_POST["name"],
                $_POST["purchase_price"],
                $_POST["sell_price"],
                $_POST["uom_id"],
                $_POST["description"],
                $photo,
                $_POST["brand_id"],
                $_POST["category_id"]
            );

            $product->create();
            redirect("product");
        }
    }

    // Edit Product Form
    public function edit($id)
    {
        $data = Product::find($id);

        $uoms = Uoms::all();
        $brands = Brand::all();

        view(
            "",
            compact(
                "data",
                "uoms",
                "brands"
            )
        );
    }

    // Update Product
   public function update()
    {

        // print_r($_FILES);
        if (isset($_POST["btn_submit"])) {
            
        // print_r($_FILES);
        // print_r($_POST);
            //  $photo = $_POST["old_photo"];

            if (!empty($_FILES["photo"]["name"])) {
                $photo = File::upload($_FILES["photo"], "img",  $_POST["name"]);
            }

            $product = new Product();
            $product->set(
                $_POST["id"],
                $_POST["name"],
                $_POST["purchase_price"],
                $_POST["sell_price"],
                $_POST["uom_id"],
                $_POST["description"],
                $photo,
                $_POST["brand_id"],
                $_POST["category_id"]
            );

            $product->update();

            redirect();
        }


}
    // Delete Product
    public function delete($id)
    {
        Product::delete($id);

        redirect("product");
    }
}