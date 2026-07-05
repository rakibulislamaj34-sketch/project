<?php

class PurchaseController
{
    // Show All Purchases
    public function index()
    {
        $data = Purchase::showPurchase();
        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        view("",$data = ['data']);
    }

    // Save Purchase
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $purchase = new Purchase();

            $purchase->set(
                $_POST["id"],
                $_POST["vendor_id"],
                $_POST["status_id"],
                $_POST["date"],
                $_POST["total"],
                $_POST["discount"],
                $_POST["address"],
                $_POST["vat"],
                $_POST["paid_amount	"]
            );

            $purchase->save();

            redirect();
        }
    }

    // Delete Purchase
    public function delete()
    {
        $purchase = new Purchase();

        $purchase->delete($_GET["id"]);

        redirect();
    }

    // Edit Form
    public function edit()
    {
        $data = Purchase::find($_GET["id"]);

        view("", compact("data"));
    }

    // Update Purchase
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $purchase = new Purchase();

            $purchase->set(
                $_POST["id"],
                $_POST["vendor_id"],
                $_POST["status_id"],
                $_POST["date"],
                $_POST["total"],
                $_POST["discount"],
                $_POST["address"],
                $_POST["vat"],
                $_POST["paid_amount	"]
            );

            $purchase->update($_POST["id"]);

            redirect();
        }
    }
}