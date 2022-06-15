<?php

class DBOperation
{
    private $con;
   
    function __construct()
    {
        include_once "./database/db_connection.php";
        $db        = new Database();
        $this->con = $db->connect();
    }
   
    //add product
    public function addProduct($sku,$name,$price,$productType,$size,$weight,$length,$width,$height)
    {
        $pre_stmt = $this->con->prepare("INSERT INTO `test`(`sku`, `name`, `price`,`product_Type`, `size`,`weight`,`height`,`length`,`width`) VALUES (?,?,?,?,?,?,?,?,?)");
        $pre_stmt->bind_param("ssdsiiiii",$sku,$name,$price,$productType,$size,$weight,$height,$length,$width);
        ($result = $pre_stmt->execute()) or die($this->con->error);
        if ($result) {
            $_SESSION['status']="New product Added!";
           // return "New product Added!";
        } else {
           $_SESSION['status'] = "Error during Product saving";
        }
    }
    
     //Add DVD
    public function addDvd($sku, $name, $price,$productType,$size)
    {
        $pre_stmt = $this->con->prepare("INSERT INTO `units`(`sku`, `name`, `price`, `product_Type`) VALUES (?,?,?,?,?)");
        $pre_stmt->bind_param("ssdi", $sku, $name, $price, $size);
        ($result = $pre_stmt->execute()) or die($this->con->error);
        if ($result) {
            return "New_DVD_Added!";
        } else {
            return "error";
        }
    }
    // add Furniture
    public function addFurniture($sku, $name, $price, $width, $length, $height)
    {
        $pre_stmt = $this->con->prepare("INSERT INTO `furniture`(`sku`, `name`, `price`, `width`, `length`, `height`) VALUES (?,?,?,?,?,?)");
        
        $pre_stmt->bind_param("ssdiii", $sku, $name, $price, $width, $length, $height);
        ($result = $pre_stmt->execute()) or die($this->con->error);
        if ($result) {
            return "New_Furniture_Added!";
        } else {
            return "error";
        }
    }
    //add Book
    public function addBook($sku, $name, $price, $weight)
    {
        $pre_stmt = $this->con->prepare("INSERT INTO `book`(`sku`, `name`, `price`, `weight`) VALUES (?,?,?,?)");
        $pre_stmt->bind_param("ssdi", $sku, $name, $price, $weight);
        ($result = $pre_stmt->execute()) or die($this->con->error);
        if ($result) {
            return "New_Book_Added!";
        } else {
            return "error";
        }
    }
}

$opr = new DBOperation();

?>