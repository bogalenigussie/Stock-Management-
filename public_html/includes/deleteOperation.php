<?php
//delete product records
session_start();
require_once("../database/dbConnection.php");
require_once("fetchData.php");

$con =mysqli_connect("localhost","root","","stocks");


if(isset($_POST['mass-delete-products-btn']))
{
    $all_id=$_POST['product-delete-id'];
    $extract_id= implode(',', $all_id);
  echo  $extract_id;
      $query  =  "DELETE FROM products WHERE id  IN($extract_id)";
      $query_run = mysqli_query($con,$query);
    
      if( $query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location:http://localhost/stock-management/stock-management-/public_html/index.php");
            
       
    }
    else
    {

       $_SESSION['status'] = "You Must Select A Product To Delete";
        header("Location:http://localhost/stock-management/stock-management-/public_html/index.php");     
    }
}

?>