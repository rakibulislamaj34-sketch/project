<?php

class VendorsController
{
    // Show All Vendors
    public function index()
    {
        $data = Vendors::all();

        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        view("");
    }

    // Save Vendor
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $vendor = new Vendors();

            $vendor->set(
                "",
                $_POST["name"],
                $_POST["phone"],
                $_POST["address"],
                $_POST["email"]
            );

            $vendor->create();

            redirect("vendors");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $vendor = Vendors::find($id);

        view("", compact("vendor"));
    }

    // Update Vendor
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $vendor = new Vendors();

            $vendor->set(
                $_POST["id"],
                $_POST["name"],
                $_POST["phone"],
                $_POST["address"],
                $_POST["email"]
            );

            $vendor->update();

            redirect("vendors");
        }
    }

    // Delete Vendor
    public function delete($id)
    {
        Vendors::delete($id);

        redirect("vendors");
    }
}

?>