<?php
class Orderdetail extends Model implements JsonSerializable{
	public $id;
	public $order_detail;
	public $order_id;
	public $item_id;
	public $quantity;
	public $unit_price;
	public $create_at;
	public $update_at;
	public $created_at;
	public $updated_at;

	public function __construct(){
	}
	public function set($id,$order_detail,$order_id,$item_id,$quantity,$unit_price,$create_at,$update_at,$created_at,$updated_at){
		$this->id=$id;
		$this->order_detail=$order_detail;
		$this->order_id=$order_id;
		$this->item_id=$item_id;
		$this->quantity=$quantity;
		$this->unit_price=$unit_price;
		$this->create_at=$create_at;
		$this->update_at=$update_at;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}orderdetails(order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at)values('$this->order_detail','$this->order_id','$this->item_id','$this->quantity','$this->unit_price','$this->create_at','$this->update_at','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}orderdetails set order_detail='$this->order_detail',order_id='$this->order_id',item_id='$this->item_id',quantity='$this->quantity',unit_price='$this->unit_price',create_at='$this->create_at',update_at='$this->update_at',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}orderdetails where id={$id}");
	}
	public function jsonSerialize():mixed{
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at from {$tx}orderdetails");
		$data=[];
		while($orderdetail=$result->fetch_object()){
			$data[]=$orderdetail;
		}
			return $data;
	}


     public static function all_order_id($id){
		global $db,$tx;
		$result=$db->query("select id,order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at from {$tx}orderdetails
		where order_id = $id");
		$data=[];
		while($orderdetail=$result->fetch_object()){
			$data[]=$orderdetail;
		}
			return $data;
	}




	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at from {$tx}orderdetails $criteria limit $top,$perpage");
		$data=[];
		while($orderdetail=$result->fetch_object()){
			$data[]=$orderdetail;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}orderdetails $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at from {$tx}orderdetails where id='$id'");
		$orderdetail=$result->fetch_object();
			return $orderdetail;
	}

	
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}orderdetails");
		$orderdetail =$result->fetch_object();
		return $orderdetail->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Order Detail:$this->order_detail<br> 
		Order Id:$this->order_id<br> 
		Item Id:$this->item_id<br> 
		Quantity:$this->quantity<br> 
		Unit Price:$this->unit_price<br> 
		Create At:$this->create_at<br> 
		Update At:$this->update_at<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbOrderdetail"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}orderdetails");
		while($orderdetail=$result->fetch_object()){
			$html.="<option value ='$orderdetail->id'>$orderdetail->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx,$base_url;
		$count_result =$db->query("select count(*) total from {$tx}orderdetails $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at from {$tx}orderdetails $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'>".Html::link(["class"=>"btn btn-success","route"=>"orderdetail/create","text"=>"New Orderdetail"])."</th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Order Detail</th><th>Order Id</th><th>Item Id</th><th>Quantity</th><th>Unit Price</th><th>Create At</th><th>Update At</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Order Detail</th><th>Order Id</th><th>Item Id</th><th>Quantity</th><th>Unit Price</th><th>Create At</th><th>Update At</th><th>Created At</th><th>Updated At</th></tr>";
		}
		while($orderdetail=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='btn-group' style='display:flex;'>";
				$action_buttons.= Event::button(["name"=>"show", "value"=>"Show", "class"=>"btn btn-info", "route"=>"orderdetail/show/$orderdetail->id"]);
				$action_buttons.= Event::button(["name"=>"edit", "value"=>"Edit", "class"=>"btn btn-primary", "route"=>"orderdetail/edit/$orderdetail->id"]);
				$action_buttons.= Event::button(["name"=>"delete", "value"=>"Delete", "class"=>"btn btn-danger", "route"=>"orderdetail/confirm/$orderdetail->id"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$orderdetail->id</td><td>$orderdetail->order_detail</td><td>$orderdetail->order_id</td><td>$orderdetail->item_id</td><td>$orderdetail->quantity</td><td>$orderdetail->unit_price</td><td>$orderdetail->create_at</td><td>$orderdetail->update_at</td><td>$orderdetail->created_at</td><td>$orderdetail->updated_at</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx,$base_url;
		$result =$db->query("select id,order_detail,order_id,item_id,quantity,unit_price,create_at,update_at,created_at,updated_at from {$tx}orderdetails where id={$id}");
		$orderdetail=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Orderdetail Show</th></tr>";
		$html.="<tr><th>Id</th><td>$orderdetail->id</td></tr>";
		$html.="<tr><th>Order Detail</th><td>$orderdetail->order_detail</td></tr>";
		$html.="<tr><th>Order Id</th><td>$orderdetail->order_id</td></tr>";
		$html.="<tr><th>Item Id</th><td>$orderdetail->item_id</td></tr>";
		$html.="<tr><th>Quantity</th><td>$orderdetail->quantity</td></tr>";
		$html.="<tr><th>Unit Price</th><td>$orderdetail->unit_price</td></tr>";
		$html.="<tr><th>Create At</th><td>$orderdetail->create_at</td></tr>";
		$html.="<tr><th>Update At</th><td>$orderdetail->update_at</td></tr>";
		$html.="<tr><th>Created At</th><td>$orderdetail->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$orderdetail->updated_at</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
