<?php
class ProductApi{
    public function __construct(){
    }
    public function index(){
        echo json_encode(["products"=>Product::all()]);
    }
    function pagination($data){
        $page=$data["page"];
        $perpage=$data["perpage"];
        echo json_encode(["products"=>Product::pagination($page,$perpage),"total_recods"=>Product::count()]);
    }
    function find($data){
        product::delete($data["id"]);
        echo json_encode(["success"=>"yes"]);

    }
    function save($data,$file=[]){
        $product=new Product();
        $product->name=$data["name"];
        $product->purchase_price=$data["purchase_price"];
        $product->sell_price=$data["sell_price"];
        $product->uom_id=$data["uom_id"];
        $product->description=$data["description"];
        $product->photo=$data["photo"];
        $product->brand_id=$data["brand_id"];
        $product->category_id=$data["category_id"];
        $product->updated_at=$data["updated_at"];

        $product->save();
        echo json_encode(["success"=>"yes"]);


    } 
    function update($data,$file=[]){
        $product=new Product();
        $product->id=$data["id"];
        $product->name=$data["name"];
        $product->purchase_price=$data["purchase_price"];
        $product->sell_price=$data["sell_price"];
        $product->uom_id=$data["data"];
        $product->description=$data["description"];
      if(isset($file["photo"]["name"])){
        $product->photo=upload($file["photo"],"../img",$data["name"]);
      }else{
        $product->brand_idtar=$data["brand_id"];
        $product->category_id=$data["category_id"];
        $product->updated_at=$data["updated_at"];

        $product->update();
        echo json_encode(["success"=>"yes"]);

      }
    }    
}

?>