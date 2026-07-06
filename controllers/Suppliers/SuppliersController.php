<?php

class SuppliersController
{
    // Show All Suppliers
    public function index()
    {
        $data = Suppliers::all();
        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        view("");
    }

    // Save Supplier
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $supplier = new Suppliers();

            $supplier->set(
                "",
                $_POST["name"],
                $_POST["phone"],
                $_POST["email"],
                $_POST["bank_account"],
                $_POST["cost_price"],
                $_POST["selling_price"]
            );

            $supplier->create();

           redirect();
         
        }
    }

    // Edit Form
    public function edit($id)
    {
        $supplier = Suppliers::find($id);

        view("", compact("supplier"));
    }

    // Update Supplier
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $supplier = new Suppliers();

            $supplier->set(
                $_POST["id"],
                $_POST["name"],
                $_POST["phone"],
                $_POST["email"],
                $_POST["bank_account"],
                $_POST["cost_price"],
                $_POST["selling_price"]
            );

            $supplier->update();

           redirect();
        }
    }

    // Delete Supplier
    public function delete($id)
    {
        Suppliers::delete($id);

       redirect();
    }
}    