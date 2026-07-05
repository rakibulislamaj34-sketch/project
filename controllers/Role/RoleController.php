<?php

class rolecontroller
{
    // Show All
    public function index()
    {
        $data = role::showrole();

        view("", compact("data"));
    }

    // Create
    public function create()
    {
        view("");
    }

    // Save
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $role = new role();

            $role->set(
                $_POST["name"],
                $_POST["email"],
                $_POST["description"]
            );

            $role->save();

            redirect();
        }
    }

    // Delete
    public function delete()
    {
        $role = new role();

        $role->delete($_GET["id"]);

        redirect();
    }

    // Edit
    public function edit()
    {
        $data = role::find($_GET["id"]);

        view("", compact("data"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $role = new role();

            $role->set(
                $_POST["name"],
                $_POST["email"],
                $_POST["description"]
            );

            $role->update($_POST["id"]);

            redirect();
        }
    }
}

?>