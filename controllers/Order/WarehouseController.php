<?php 

class WarehouseController{

    function index(){       
       view("order", ["abc" => Warehouses::all()] );
     }
}



 
?>