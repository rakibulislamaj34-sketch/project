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
        $roles = Role::showRole();
        view("", compact("roles"));
    }

    // Save User
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $photo = "";

            if (!empty($_FILES["photo"]["name"])) {
                $photo = File::upload(
                    $_FILES["photo"],
                    "img",
                    $_POST["full_name"]
                );
            }

            $user = new Users();

            $user->set(
                $_POST["full_name"],
                $_POST["email"],
                $_POST["password"],
                $_POST["role_id"],
                $photo,
                $_POST["status"]
            );

            $user->save();

            redirect();
        }
    }

    // Edit Form
    public function edit()
    {
        $data = Users::find($_GET["id"]);
        $roles = Role::showRole();

        view("", compact("data", "roles"));
    }

    // Update User
    public function update()
    {
        if (isset($_POST["btn_submit"])) {

            $oldUser = Users::find($_POST["id"]);

            $photo = $oldUser->photo;

            if (!empty($_FILES["photo"]["name"])) {

                if (!empty($oldUser->photo) && file_exists("img/" . $oldUser->photo)) {
                    unlink("img/" . $oldUser->photo);
                }

                $photo = File::upload(
                    $_FILES["photo"],
                    "img",
                    $_POST["full_name"]
                );
            }

            $user = new Users();

            $user->set(
                $_POST["full_name"],
                $_POST["email"],
                $_POST["password"],
                $_POST["role_id"],
                $photo,
                $_POST["status"]
            );

            $user->update($_POST["id"]);

            redirect();
        }
    }

    // Delete User
    public function delete()
    {
        $user = Users::find($_GET["id"]);

        if ($user) {

            if (!empty($user->photo) && file_exists("img/" . $user->photo)) {
                unlink("img/" . $user->photo);
            }

            $obj = new Users();
            $obj->delete($_GET["id"]);
        }

        redirect();
    }
}