<?php

class InventorysController
{
    // Show All
    public function index()
    {
        $data = Inventorys::all();
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
        if (isset($_POST["btn_submit"])) {

            $inventory = new Inventorys();

            $inventory->set(
                "",
                $_POST["product_name"],
                $_POST["quantity"]
            );

            $inventory->create();

            redirect();
        }
    }

    // Delete
    public function delete()
    {
        Inventorys::delete($_GET["id"]);

        redirect();
    }

    // Edit Form
    public function edit()
    {
        $data = Inventorys::find($_GET["id"]);

        view("", compact("data"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $inventory = new Inventorys();

            $inventory->set(
                $_POST["id"],
                $_POST["product_name"],
                $_POST["quantity"]
            );

            $inventory->update();

            redirect();
        }
    }
}