<?php

class MenuitemsController
{
    // Show All
    public function index()
    {
        $data = menuitems::all();

        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        $categories =Categories::all();

        view("", compact("categories"));
    }

    // Save
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $menu = new menuitems();

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
        $menu = menuitems::find($id);
        $categories = Categories::all();
       
        view("", compact("menu", "categories"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $menu = new menuitems();

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
        menuitems::delete($id);

        redirect("menuitems");
    }
}