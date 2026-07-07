<?php

class OrdersController
{
    // Show All Orders
    public function index()
    {
        $data = Orders::all();

        view("", compact("data"));
    }

    // Create Form
    public function create()
    {
        $customer = Customers::all();
        $table    = Tables::all();
         $users     = Users::showUser();
        //  print_r($customer);
         

        view("", compact("customer", "table","users"));
    }

    // Save Order
    public function save()
    {
        if (isset($_POST["btn_submit"])) {

            $order = new Orders();

            $order->set(
                "",
                $_POST["customer_id"],
                $_POST["table_id"],
                $_POST["user_id"],
                $_POST["order_date"],
                $_POST["cost_price"],
                $_POST["total_amount"],
                $_POST["order_status"]
            );

            $order->create();

            redirect("orders");
        }
    }

    // Edit Form
    public function edit($id)
    {
        $order    = Orders::find($id);
        $customer = Customers::all();
        $table    = Tables::all();
       

        view("", compact("order", "customer", "table", ));
    }

    // Update Order
    public function update()
    {
        if (isset($_POST["btn_update"])) {

            $order = new Orders();

            $order->set(
                $_POST["id"],
                $_POST["customer_id"],
                $_POST["table_id"],
                $_POST["user_id"],
                $_POST["order_date"],
                $_POST["cost_price"],
                $_POST["total_amount"],
                $_POST["order_status"]
            );

            $order->update();

            redirect("orders");
        }
    }

    // Delete Order
    public function delete($id)
    {
        Orders::delete($id);

        redirect("orders");
    }
}