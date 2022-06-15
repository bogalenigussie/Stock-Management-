<?php

require_once("db.php");
require_once("component.php");
require_once("product.php");

$con=Createdb();


if(isset($_POST['save'])){
    
    echo $_POST['sku'];

    echo "belete";
// var_dump($_POST[]) ;
foreach ($_POST as $param_name => $param_val) {
    echo "Param: $param_name; Value: $param_val<br />\n";
}
     createData();
}



function createData(){
        $SKU=textboxValue('sku');
        $ProductName=textboxValue('prod_name');
        $Price=textboxValue('price');
        $ProductType=textboxValue('product_Type');
        $ProductWeight=textboxValue('products_weight');
   
     $ProductSize=textboxValue('size');
        $ProductHeight=textboxValue('height');
        $ProductWidth=textboxValue('length');
         $ProductLength=textboxValue('width');
          

// $product1=new product1($SKU,$ProductName,$Price,$ProductType,$ProductWeight);
// $product2=new product2($SKU,$ProductName,$Price,$ProductType,$ProductSize);
// $product3=new product3($SKU,$ProductName,$Price,$ProductType,$ProductHeight,$ProductWidth,$ProductLength);




    if( $SKU && $ProductName && $Price && $ProductType && $ProductWeight)
    {

        
        $product1=new product1($SKU,$ProductName,$Price,$ProductType,$ProductWeight) ;

        $sql=("INSERT INTO product_type(sku,prod_name,price,product_Type) VALUES (?,?,?,?)");

        $stmt1 = mysqli_prepare($GLOBALS['con'],$sql);
        mysqli_stmt_bind_param($stmt1, 'ssds', $SKU, $ProductName, $Price, $ProductType);
      
        
        if(mysqli_stmt_execute($stmt1)){
            

          $sql2=("INSERT INTO product_weight(product_id,products_weight) VALUES (?)");
          $stmt2 = mysqli_prepare($GLOBALS['con'],$sql2);
          mysqli_stmt_bind_param($stmt2, 's',$ProductWeight);
          mysqli_stmt_execute($stmt2);
            echo "product successfully added";
     
          
       }else{
           echo "failed";
       }
    }

else if($SKU && $ProductName && $Price && $ProductType && $ProductSize){

   $product2=new product2($SKU,$ProductName,$Price,$ProductType,$ProductSize);      
   $sql=("INSERT INTO product_type(sku,prod_name,price,product_Type) VALUES (?,?,?,?)");
   $stmt1 = mysqli_prepare($GLOBALS['con'],$sql);
   
   mysqli_stmt_bind_param($stmt1, 'ssds', $SKU, $ProductName, $Price, $ProductType);

   
         if(mysqli_stmt_execute($stmt1)){

         $sql2=("INSERT INTO product_size(size) VALUES (?)");
         $stmt2 = mysqli_prepare($GLOBALS['con'],$sql2);
         mysqli_stmt_bind_param($stmt2, 'd',$ProductSize);
         mysqli_stmt_execute($stmt2);
         echo "product successfully added";
         } else{
              echo "failed";
      
          }
}else{

   $product3=new product3($SKU,$ProductName,$Price,$ProductType,$ProductHeight,$ProductWidth,$ProductLength);  
   $sql=("INSERT INTO product_type(sku,prod_name,price,product_Type) VALUES (?,?,?,?)");
   $stmt1 = mysqli_prepare($GLOBALS['con'],$sql);
   

  mysqli_stmt_bind_param($stmt1, 'ssds', $SKU, $ProductName, $Price, $ProductType);

   if(mysqli_stmt_execute($stmt1)){
     $sql2=("INSERT INTO product_dimension(height,lngth,width) VALUES (?,?,?)");
     $stmt2 = mysqli_prepare($GLOBALS['con'],$sql2);
      mysqli_stmt_bind_param($stmt2, 'ddd',$ProductHeight,$ProductWidth,$ProductLength);
      mysqli_stmt_execute($stmt2);
     echo "product successfully added";
   } else
      {
   
    echo "failed";
     
       }



}

}
      
    



//security for input values
function textboxValue($value){
    // echo $con;
   //  echo  $_POST[$value];
    // $textbox=mysqli_real_escape_string($con,trim($_POST[$value]));
    // if(empty($textbox)){
    //     return false;
    // }else{
    //     return $textbox;
    // }
    return $_POST[$value];
   
}

    