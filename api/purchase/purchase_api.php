<?php

class PurchaseApi
{
    function index()
    {
        echo json_encode(["success"=>"api is working"]);

    }

    function purchaseprocess()
    {
        global $db;
        try {
            $db->begin_transaction();

            $products= array_map(fn($d) =>(object)$d, $_POST["products"]);
            $total = array_reduce($products,fn($acc,$item) =>$acc + ($item->qty*$item->price),0);

            $purchase->status_id   = 1;
            $purchase->vendor_id   = $_POST["vendor_id"];
            $purchase->date        = date("Y-m-d H:i:s");
            $purchase->total       = $total;
            $purchase->discount    = 0;
            $purchase->address     = $_POST["address"];
            $purchase->vat         = 0;
            $purchase->paid_amount = 0;
            $purchase->created_at  = date("Y-m-d H:i:s");
            $purchase->updated_at  = date("Y-m-d H:i:s");

            $purchase_id = $purchase->save();

            foreach ($products as $key => $products) {

              $purchase_details = new PurchaseDetail();
              $price  = Product::find($product->id)->price;
              $purchase_details->purchase_id = $purchase_id;
              $purchase_details->product_id = $product_id;
              $purchase_details->qty = $product->qty;
              $purchase_details->price = $price;
              $purchase_details->vat = 0;
              $purchase_details->discount =0;
              $purchase_details->save();




               $stock = new Stock();

$stock->product_id     = $product->id;
$stock->quantity       = $product->qty;
$stock->transaction_id = 1;     
$stock->warehouse_id   = 1;
$stock->created_at = date("Y-m-d H:i:s");
 $stock->lot_id = "LOT" . date("Y-m-d H:i:s") . $product->id;
$stock->save();
              
          
                

            }















        }
        
    }





















}































?>