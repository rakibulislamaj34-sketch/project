<?php

class CategoriesControllers
{
    public function index()
    {
        $Categories = categories::all();
        view("", compact("Categories"));
    }

    public function create()
    {
        view("");
    }

    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $Categories = new categories();

            $Categories->set(
                null,
                $_POST["name"]
            );

            $Categories->create();

            redirect("categories");
        }
    }

    public function edit($id)
    {
        $Categories = categories::find($id);

        view("", compact("Categories"));
    }

    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $Categories = new categories();

            $Categories->set(
                $_POST["id"],
                $_POST["name"]
            );

            $Categories->update();

            redirect("categories");
        }
    }

    public function delete($id)
    {
        Categories::delete($id);

        redirect("Categories");
    }
}