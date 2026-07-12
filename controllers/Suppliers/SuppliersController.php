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
                $_POST["supplier_name"],
                $_POST["phone"],
                $_POST["email"],
                $_POST["bank_account"],
                $_POST["cost_price"],
                $_POST["selling_price"],
                $_POST["unit"]
            );

            $supplier->create();

            redirect("suppliers");
        }
    }

    // Edit Form
    public function edit($Supplier_id)
    {
        $supplier = Suppliers::find($Supplier_id);

        view("", compact("supplier"));
    }

    // Update Supplier
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $supplier = new Suppliers();

            $supplier->set(
                $_POST["Supplier_id"],
                $_POST["supplier_name"],
                $_POST["phone"],
                $_POST["email"],
                $_POST["bank_account"],
                $_POST["cost_price"],
                $_POST["selling_price"],
                $_POST["unit"]
            );

            $supplier->update();

            redirect("suppliers");
        }
    }

    // Delete Supplier
    public function delete($Supplier_id)
    {
        Suppliers::delete($Supplier_id);

        redirect("suppliers");
    }
}