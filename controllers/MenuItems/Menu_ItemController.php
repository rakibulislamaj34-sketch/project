<?php

class Menu_ItemsController
{
    // Show All
    public function index()
    {
        $data = Menu_Items::all();

        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        $categories = Category::all();

        view("", compact("categories"));
    }

    // Save
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $menu = new Menu_Items();

            $menu->set(
                "",
                $_POST["category_id"],
                $_POST["name"],
                $_POST["price"],
                $_POST["status"]
            );

            $menu->save();

            redirect("menuitems");
        }
    }

    // Edit
    public function edit($id)
    {
        $menu = Menu_Items::find($id);
        $categories = Category::all();

        view("", compact("menu", "categories"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $menu = new Menu_Items();

            $menu->set(
                $_POST["id"],
                $_POST["category_id"],
                $_POST["name"],
                $_POST["price"],
                $_POST["status"]
            );

            $menu->update();

            redirect("menuitems");
        }
    }

    // Delete
    public function delete($id)
    {
        Menu_Items::delete($id);

        redirect("menuitems");
    }
}