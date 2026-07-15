<?php

class BrandController
{
    // Show All
    public function index()
    {
        $data = Brand::all();

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

            $uom = new Brand();

            $uom->set(
                "",
                $_POST["name"]
            );

            $uom->create();

            redirect("Brand");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $uom = Uoms::find($id);
        $brand=brand::find($id);

        view("", compact("uom","brand"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $brand = new brand();

            $brand->set(
                $_POST["id"],
                $_POST["name"]
            );

            $brand->update();

            redirect("brand");
        }
    }

    // Delete
    public function delete($id)
    {
        brand::delete($id);

        redirect("brand");
    }
}

?>