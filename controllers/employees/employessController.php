<?php

class EmployeesController
{
    // Show All
    public function index()
    {
        $data = Employees::all();

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

            $employees = new Employees();

            $employees->set(
                "",
                $_POST["name"],
                $_POST["designation"],
                $_POST["phone"],
                $_POST["salary"]
            );

            $employees->create();

            redirect("employees");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $employees = Employees::find($id);

        view("", compact("employees"));
    }

    // Update
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $employees= new Employees();

            $employees->set(
                $_POST["id"],
                $_POST["name"],
                $_POST["designation"],
                $_POST["phone"],
                $_POST["salary"]
            );

            $employees->update();

            redirect("employees");
        }
    }

    // Delete
    public function delete($id)
    {
        Employees::delete($id);

        redirect("employees");
    }
}