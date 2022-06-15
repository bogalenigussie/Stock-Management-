<?php

class fetchOperation
{
private $con;
function __construct(){
include_once("./database/db_connection.php");
$db =new Database();
$this->con=$db->connect();
}
    
public function getAllRecord()
   {
     $pre_stmt=$this->con->prepare("SELECT sku,price,name,size FROM dvd ");
      
         $pre_stmt->execute() or die($this->con->error);
          $result=$pre_stmt->get_result();
          $rows=array();
          if($result-> num_rows > 0){
           
              while ($row = $result -> fetch_assoc()){
                  $rows[]=$row;
              }
              return $rows;
          }else 
          return "NO_DATA";
       }

}

$fetch=new fetchOperation();

?>