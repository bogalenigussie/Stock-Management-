<?php
include_once "../database/constants.php";
include_once "DBOperation.php";


//Add DVD
if (isset($_POST["sku"]) and isset($_POST["name"]) and isset($_POST["price"]) and isset($_POST["size"])) {
    $obj    = new DBOperation();
    $result = $obj->addDvd($_POST["sku"], $_POST["name"], $_POST["price"], $_POST["size"]);
    
    echo $result;
    exit();
}
//Add Book
if (isset($_POST["sku"]) and isset($_POST["name"]) and isset($_POST["price"]) and isset($_POST["weight"])) {
    $obj    = new DBOperation();
    $result = $obj->addBook($_POST["sku"], $_POST["name"], $_POST["price"], $_POST["weight"]);
    
    echo $result;
    exit();
}
//Add Furniture
if (isset($_POST["sku"]) and isset($_POST["name"]) and isset($_POST["price"]) and isset($_POST["height"]) and isset($_POST["width"]) and isset($_POST["length"])) {
    $obj    = new DBOperation();
    $result = $obj->addFurniture($_POST["sku"], $_POST["name"], $_POST["price"], $_POST["width"], $_POST["length"], $_POST["height"]);
    
    echo $result;
    exit();
}
// //To get Category

// if (isset($_POST["getCategory"])) {
//     $obj = new DBOperation();
//     $rows = $obj->getAllRecord("categories");
//     foreach ($rows as $row) {
//         echo "<option value='" .
//             $row["cid"] .
//             "'>" .
//             $row["category_name"] .
//             "</option>";
//     }
//     exit();
// }

//Add Category
if (isset($_POST["category_name"]) and isset($_POST["parent_cat"])) {
    $obj    = new DBOperation();
    $result = $obj->addCategory($_POST["parent_cat"], $_POST["category_name"]);
    
    echo $result;
    exit();
}
?>