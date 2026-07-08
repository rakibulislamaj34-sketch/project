<?php

class InventoryController
{
    // Show All
    public function index()
    {
        $data = Inventory::all();

        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        $Supplier = Suppliers::all();

        view("", compact("Supplier"));
    }

    // Save
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $Inventory = new Inventory();

            $Inventory->set(
                "",
                $_POST["inventory_id"],
                $_POST["supplier_id"],
                $_POST["ingredient_name"],
                $_POST["quantity"],
                $_POST["unit"]
            );

            $Inventory->create();

            redirect("inventory");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $Inventory = Inventory::find($id);
        $Supplier = Suppliers::all();

        view("", compact("Inventory", "Supplier"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $Inventory = new Inventory();

            $Inventory->set(
                $_POST["id"],
                $_POST["inventory_id"],
                $_POST["supplier_id"],
                $_POST["ingredient_name"],
                $_POST["quantity"],
                $_POST["unit"]
            );

            $Inventory->update();

            redirect("inventory");
        }
    }

    // Delete
    public function delete($id)
    {
        Inventory::delete($id);

        redirect("inventory");
    }
}