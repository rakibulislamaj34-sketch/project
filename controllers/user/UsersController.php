<?php

class UsersController
{
    // Show All Users
    public function index()
    {
        $data = Users::showUser();
        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        view("");
    }

    // Save User
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $user = new Users();

            $user->set(
                $_POST["name"],
                $_POST["email"],
                $_POST["password"],
                $_POST["role_id"],
                $_POST["photo"],
                $_POST["status"]
            );

            $user->save();

            redirect();
        }
    }

    // Delete User
    public function delete()
    {
        $user = new Users();
        $user->delete($_GET["id"]);

        redirect();
    }

    // Edit Form
    public function edit()
    {
        $data = Users::find($_GET["id"]);

        view("user/edit", compact("data"));
    }

    // Update User
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $user = new Users();

            $user->set(
                $_POST["name"],
                $_POST["email"],
                $_POST["password"],
                $_POST["role_id"],
                $_POST["photo"],
                $_POST["status"]
            );

            $user->update($_POST["id"]);

            redirect();
        }
    }
}