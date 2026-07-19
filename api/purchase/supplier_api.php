<?php
class Supplierapi{
    public function __construct(){
    }
    function index(){
        echo json_encode(["suppliers"=>Suppliers::all()]);
    }
    function pagination($data){
        $page=$data["page"];
        $perpage=$data["perpage"];
        echo json_encode(["suppliers"=>Supplier::pagination($page,$perpage),"total_records"=>Suppliers::count()]);    
    }
    function find($data){
        echo json_encode(["supplier"=>Supplier::find($data["id"])]);  
    }
    function delete($data){
        Supplier::delete($data["id"]);
        echo json_encode(["success" => "yes"]);
    }
    function save($data,$file=[]){
        $supplier=new Supplier();
        $supplier->supplier_name=$data["supplier_name"];
        $supplier->phone=$data["phone"];
        $supplier->email=$data["email"];
        $supplier->bank_account=$data["bank_account"];
        $supplier->cost_price=$data["cost_price"];
        $supplier->selling_price=$data["selling_price"];
        $supplier->unit=$data["unit"];

        	$supplier->save();
		 echo json_encode(["success" => "yes"]);
        
    }
   function update($data,$file=[]){ 
        $supplier=new Supplier();
		$supplier->id=$data["id"];
        $supplier->supplier_name=$data["supplier_name"];
        $supplier->phone=$data["phone"];
        $supplier->email=$data["email"];
        $supplier->bank_account=$data["bank_account"];
        $supplier->cost_price=$data["cost_price"];
        $supplier->selling_price=$data["selling_price"];
        $supplier->unit=$data["unit"];

        	 $supplier->update();
		     echo json_encode(["success" => "yes"]);

        
    }
    
}





















?>