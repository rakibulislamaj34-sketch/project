<?php

class StocksController
{
    // Show All
    public function index()
    {
        $data = stocks::showStocks();

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

            $stocks = new stocks();

            $stocks->set(
                $_POST["product_id"],
                $_POST["quantity"],
                $_POST["transaction_id"],
                $_POST["warehouse_id"]
            );

            $stocks->save();

            redirect();
        }
    }

    // Delete
    public function delete()
    {
        $stocks = new stocks();

        $stocks->delete($_GET["id"]);

        redirect();
    }

    // Edit Form
    public function edit()
    {
        $data = stocks::find($_GET["id"]);

        view("", compact("data"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $stocks = new stocks();

            $stocks->id = $_POST["id"];

            $stocks->set(
                $_POST["product_id"],
                $_POST["quantity"],
                $_POST["transaction_id"],
                $_POST["warehouse_id"]
            );

            $stocks->update($_POST["id"]);

            redirect();
        }
    }
}