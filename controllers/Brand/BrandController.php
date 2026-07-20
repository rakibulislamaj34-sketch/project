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
            $brand->set(null, $_POST["name"]);
            $brand->create();
            redirect("brand");
        }
    }

    public function edit($id = null)
    {
        if (is_array($id)) {
            $id = isset($id[0]) ? $id[0] : (isset($_GET['id']) ? $_GET['id'] : 0);
        }

        if (!$id) {
            $parts = explode('/', $_SERVER['REQUEST_URI']);
            $id = (int) end($parts);
        }

        $brand = Brand::find($id);
        view("", compact("brand"));
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $brand = new Brand();
            $brand_id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;
            
            if (!$brand_id) {
                $parts = explode('/', $_SERVER['REQUEST_URI']);
                $brand_id = (int) end($parts);
            }
            
            $brand_name = isset($_POST["name"]) ? $_POST["name"] : '';

            if ($brand_id > 0 && !empty($brand_name)) {
                $brand->set($brand_id, $brand_name);
                $brand->update();
            }
            
            redirect("brand");
        }
    }

    public function delete($id)
    {
        Brand::delete($id);
        redirect("brand");
    }
}