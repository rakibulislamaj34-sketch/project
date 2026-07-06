<?php

class CustomersController
{
    // Show All Customers
    public function index()
    {
        $data = Customers::all();
        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        view("");
    }

    // Save Customer
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $customer = new Customers();

            $customer->set(
                "",
                $_POST["name"],
                $_POST["phone"],
                $_POST["address"]
            );

            $customer->create();

            redirect();
           
        }
    }

    // Edit Form
    public function edit($id)
    {
        $customer = Customers::find($id);

        view("", compact("customer"));
    }

    // Update Customer
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $customer = new Customers();

            $customer->set(
                $_POST["id"],
                $_POST["name"],
                $_POST["phone"],
                $_POST["address"]
            );

            $customer->update();

           redirect();
        }
    }

    // Delete Customer
    public function delete($id)
    {
        Customers::delete($id);

      redirect();
    }
}

?>