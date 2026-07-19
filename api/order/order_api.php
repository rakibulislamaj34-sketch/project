<?php
class OrderApi
{
	public function __construct() {}
	function index()
	{
		echo json_encode(["orders" => Orders::all()]);
	}
	
	function store($data, $file = [])
	{

	   try {

        $order= new Orders();
		$order->customer_id = $data["customer_id"];
        $order->table_id =$data["table_id"];
        $order->user_id = 1;
        $order->order_date = date("Y-m-d");
        $order->cost_price = 0;
        $order->total_amount = $data["total"];
        $order->order_status = "completed";
       $order_id= $order->create();


        $items= $data['items'];

		foreach ( $items as $key => $value) {
		$order_details= new Orderdetail();

		$order_details->order_detail="data";
		$order_details->order_id=  $order_id;
		$order_details->item_id=$value["id"];
		$order_details->quantity=$value['quantity'];
		$order_details->unit_price=$value['price'];
		$order_details->save();



		$stock= new stocks();
        $stock->product_id = $value["id"];
        $stock->quantity =$value['quantity'] * -1;
        $stock->transaction_id =1;
        $stock->warehouse_id =1;

		$stock->save();




		}




		echo json_encode(["success" => $data]);

	   } catch (\Throwable $th) {


		echo json_encode(["error" => $th->getMessage()]);


	   }
		
	}
	
}
