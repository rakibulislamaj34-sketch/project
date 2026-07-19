<?php

class BrandController
{
    public function index()
    {
        $brands = Brand::all();
        view("", compact("brands"));
    }

    public function create()
    {
        view("");
    }

    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $brand = new Brand();

            $brand->set(
                null,
                $_POST["name"]
            );

            $brand->create();

            redirect("brand");
        }
    }

    public function edit($id)
    {
        $brands = Brand::find($id);

        view("", compact("brands"));
    }

    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $brands = new Brand();

            $brands->set(
                $_POST["id"],
                $_POST["name"]
            );

            $brands->update();

            redirect("brand");
        }
    }

    public function delete($id)
    {
        Brand::delete($id);

        redirect("brand");
    }
}