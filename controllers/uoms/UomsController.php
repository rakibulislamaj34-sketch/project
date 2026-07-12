<?php

class UomsController
{
    // Show All
    public function index()
    {
        $data = Uoms::all();

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

            $uom = new Uoms();

            $uom->set(
                "",
                $_POST["name"]
            );

            $uom->create();

            redirect("uoms");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $uom = Uoms::find($id);

        view("", compact("uom"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $uom = new Uoms();

            $uom->set(
                $_POST["id"],
                $_POST["name"]
            );

            $uom->update();

            redirect("uoms");
        }
    }

    // Delete
    public function delete($id)
    {
        Uoms::delete($id);

        redirect("uoms");
    }
}

?>