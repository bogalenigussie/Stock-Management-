<?php


if( isset($_POST['save']) )
{
  echo $_POST["save"];
      //read all the posted values and store them in variables
      //we will next validate if the variables are set (have value)      
      $sku = $_POST["sku"];
      $name = $_POST["name"];
      $price = $_POST["price"];
      $size = isset($_POST["size"])?$_POST["size"]:NULL;     
      $weight =isset($_POST["weight"])?$_POST["weight"]:NULL;
      $width = isset($_POST["width"])?$_POST["width"]:NULL;
      $length =isset($_POST["length"])?$_POST["length"]:NULL;
      $height =isset($_POST["height"])?$_POST["height"]:NULL;
      $productType = $_POST["product_Type"];
      
      $valid = true;
      $validationMessage = "";
      $msg="";

      echo "Abebe";
      
      echo $sku;
      echo $name;
      echo $price;
      echo $productType;
      
      
        //all products should have the required fields sku, name, price set
      if(!isset($sku) || !isset($name) || !isset($price))
      {
        $validationMessage ="Error: A product should have sku, name and price.";
        $valid = false;
      }
      
      if($valid) {
      //dvd product with no size is invalid
        if($productType =="DVD") {
          if(!isset($size)) {
              $valid = false;
              $validationMessage =" Error: A DVD should have size specified.";
            }
        }//book with no weight is invalid
        else if($productType =="Book") {
           if(!isset($weight)) {
             $validationMessage ="Error: A book should have weight specified.";
             $valid = false;
           }
        }
        else if ($productType =="Furniture") {
          //a furniture with either of the length , width , height not specified is no valid
          if(!isset($length) || !isset($width) || !isset($height)) {
            $validationMessage ="A furniture should have length, width and height specified.";
             $valid = false;
           }
        }
      
        //if the product is valid and we will save it
        if($valid) {
             $obj =new DBOperation();
            $result= $obj->addProduct($sku,$name,$price,$productType,$size,$weight,$height,$length,$width);
             echo $result;
             $msg="Product Saving succeeded!";
            }
       }
      else {
       $msg="Saving failed! " . $validationMessage;
      }
 }
?>