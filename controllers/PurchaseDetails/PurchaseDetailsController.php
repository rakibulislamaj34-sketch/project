<?php

class purchasedetailsController
{
    // Show All
    public function index()
    {
        $data = purchasedetails::showpurchasedetails();
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

            $purchasedetails = new purchasedetails();

            $purchasedetails->set(
                $_POST["purchase_id"],
                $_POST["product_id"],
                $_POST["customer_id"],
                $_POST["productquantity"],
                $_POST["price"],
                $_POST["vat"],
                $_POST["discount"]
            );

            $purchasedetails->save();

            redirect();
        }
    }

    // Delete
    public function delete()
    {
        $purchasedetails = new purchasedetails();

        $purchasedetails->delete($_GET["id"]);

        redirect();
    }

    // Edit Form
    public function edit()
    {
        $data = purchasedetails::find($_GET["id"]);

        view("purchasedetails/edit", compact("data"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $purchasedetails = new purchasedetails();

            $purchasedetails->set(
                $_POST["purchase_id"],
                $_POST["product_id"],
                $_POST["customer_id"],
                $_POST["productquantity"],
                $_POST["price"],
                $_POST["vat"],
                $_POST["discount"]
            );

            $purchasedetails->update($_POST["id"]);

            redirect();
        }
    }
}