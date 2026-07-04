<?php

 class suppliers{
    public  $id;
    public $name;
    public $phone;


    public function __construct()
    {

    }

   public function set($id,$name,$phone)
   {
    $this->id=$id;
    $this->name=$name;
    $this->phone=$phone;
   }

   public function create(){
    global $db;
   $stmt= $db->query("insert into suppliers (id,name,phone) 
    values('$this->id','$this->name','$this->phone'
    )
    ");
    return $db->insert_id;
   }
   public function update(){
    global $db;
    $stmt= $db->query("update suppliers at 
     id='this->id',
     name='this->name',
     phone='this->phone',
     where id= $this->id
    ");
    return $stmt;
   }
   public static function all (){
    global $db;
    $stmt= $db->query("select * from suppliers");
    return array_map( fn($d)=> (object) $d,$stmt->fetch_all(MYSQLI_ASSOC));
   }
   public static function find($id){
    global $db;
    $stmt= $db->query("select * from suppliers where id=$id");
    return $stmt->fetch_object();
   }
   public static function delete($id){
    global $db;
    $stmt= $db->query("delete from suppliers where id= $id");
    return $stmt;
   }





}





?>