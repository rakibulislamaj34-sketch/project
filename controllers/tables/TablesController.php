<?php

class TablesController
{
    // Show All
    public function index()
    {
        $data = tables::all();

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

            $table = new tables();

            $table->set(
                "",
                $_POST["table_number"],
                $_POST["capacity"]
            );

            $table->create();

            redirect("tables");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $table = tables::find($id);

        view("", compact("table"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $table = new tables();

            $table->set(
                $_POST["id"],
                $_POST["table_number"],
                $_POST["capacity"]
            );

            $table->update();

            redirect("tables");
        }
    }

    // Delete
    public function delete($id)
    {
        tables::delete($id);

        redirect("tables");
    }
}