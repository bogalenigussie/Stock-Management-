<?php

class DBOperation
{
    private $con;
    function __construct()
    {
        include_once "../database/db_connection.php";
        $db = new Database();
        $this->con = $db->connect();
    }
    //Add DVD
    public function addDvd($sku, $name, $price, $size)
    {
        $pre_stmt = $this->con->prepare(
            "INSERT INTO `dvd`(`sku`, `name`, `price`, `size`) VALUES (?,?,?,?)"
        );
        $pre_stmt->bind_param("ssdi", $sku, $name, $price, $size);
        ($result = $pre_stmt->execute()) or die($this->con->error);
        if ($result) {
            return "New_DVD_Added!";
        } else {
            return "error";
        }
    }
    //add product
    public function addProduct($sku, $name, $price, $size)
    {
        $pre_stmt = $this->con->prepare(
            "INSERT INTO `dvd`(`sku`, `name`, `price`, `size`) VALUES (?,?,?,?)"
        );
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
        $pre_stmt = $this->con->prepare(
            "INSERT INTO `furniture`(`sku`, `name`, `price`, `width`, `length`, `height`) VALUES (?,?,?,?,?,?)"
        );

        $pre_stmt->bind_param(
            "ssdiii",
            $sku,
            $name,
            $price,
            $width,
            $length,
            $height
        );
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
        $pre_stmt = $this->con->prepare(
            "INSERT INTO `book`(`sku`, `name`, `price`, `weight`) VALUES (?,?,?,?)"
        );
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