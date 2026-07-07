<?php


class WarehousesController
{

    function index()
    {
        $data = warehouses::all();
        view("", compact("data"));
    }

    function create(){
        view("",);
    }
    function save(){
        print_r($_POST);

       if(isset($_POST["btn_submit"])){
       $warehouses= new warehouses();
       $warehouses->warehouseid= $_POST["warehouseid"];
       $warehouses->name= $_POST["name"];
       $warehouses->manager_name= $_POST["manager_name"];
       $warehouses->userid= $_POST["userid"];
       $warehouses->phone= $_POST["phone"];
       $warehouses->email= $_POST["email"];
       $warehouses->create();
         redirect();
       }
      
    }

    function delete(){
        $id= $_GET["id"];
        warehouses::delete($id);
        redirect();
    }

   function edit(){
     $data= warehouses::find($_GET["id"]);
     view("", compact("data"));
   }

   function update(){
    if(isset($_POST["btn_submit"])){
       $warehouses= new warehouses();
       $warehouses->warehouseid= $_POST["warehouseid"];
       $warehouses->name= $_POST["name"];
       $warehouses->manager_name= $_POST["manager_name"];
       $warehouses->userid= $_POST["userid"];
       $warehouses->phone= $_POST["phone"];
       $warehouses->email= $_POST["email"];
       $warehouses->update();
         redirect();
       }
   }

}