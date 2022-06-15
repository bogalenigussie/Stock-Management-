<?php
   class product {

      /* Member variables */
      public $SKU;
      public $ProductName;
      public $Price;
       public $ProductType;
      
      
   public function __construct($SKU,$ProductName,$Price,$ProductType) {
      $this->SKU = $SKU;
      $this->ProductName = $ProductName;
      $this->Price = $Price;
      $this->ProductType = $ProductType;

      }
   }

class product1 extends product
{
   public $ProductWeight;
   public function __construct($SKU,$ProductName,$Price,$ProductType,$ProductWeight){
       $this->ProductWeight = $ProductWeight;
   }
}
class product2 extends product{
   public $ProductSize ;
  public function __construct($SKU,$ProductName,$Price,$ProductType,$ProductSize){
       $this->ProductSize  = $ProductSize ;
   }
}
class product3 extends product{
public $ProductHeight;
public $ProductWidth;
public $ProductLength;
public function __construct($SKU,$ProductName,$Price,$ProductType,$ProductHeight,$ProductWidth,$ProductLength){
    $this->ProductHeight = $ProductHeight;
     $this->ProductWidth = $ProductWidth;
 $this->ProductLength = $ProductLength;
   }
}
 



?>