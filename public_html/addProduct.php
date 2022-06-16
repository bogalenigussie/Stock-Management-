<?php
session_start();
?>
<?php
   $msg="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

echo $_POST["save"];

$sku = $_POST["sku"];
$name = $_POST["name"];
$price = $_POST["price"];
$productType=$_POST["productType"];
$size = isset($_POST["size"])?$_POST["size"]:NULL;
$weight =isset($_POST["weight"])?$_POST["weight"]:NULL;
$width = isset($_POST["width"])?$_POST["width"]:NULL;
$length =isset($_POST["length"])?$_POST["length"]:NULL;
$height =isset($_POST["height"])?$_POST["height"]:NULL;

$valid = true;
$validationMessage = "";

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
include_once "./includes/dbOperation.php";
$obj =new DbOperation();

$result= $obj->addProduct($sku,$name,$price,$productType,$size,$weight,$length,$width,$height);
//echo $result;
$msg=$result;
}
}
else {
$msg="Saving failed! " . $validationMessage;

}
}
?>

<!-- Add Product HTML page starts here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- custom css bootstrap link  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <div class="header-1">
            <h1> <i class="fas fa-swatchbook "></i> Product add</h1>
            <button type="button" name="cancel" class="btn btn-danger"
                onClick="window.location.reload();">Cancel</button>
        </div>
        <div class="header-2"></div>

        <?php 
        if(isset($_SESSION['status']))
        {
           ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
        
        unset($_SESSION['status']);
        }
        ?>
    </header>
    <!-- header section ends here  -->

    <!-- form  section starts here -->
    <div class="container">
        <form id="product_form" class="w-50" method="POST"
            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group row">
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">SKU</label>
                    <div class="col-sm-8">
                        <input type="text" id="sku" name="sku" autocomplete="off" placeholder='#sku'
                            class="form-control form-control-lg" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" autocomplete="off" placeholder='#name'
                            class="form-control form-control-lg" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price($)</label>
                    <div class="col-sm-8">
                        <input type="number" id="price" name="price" autocomplete="off" placeholder='#price'
                            class="form-control form-control-lg" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Type Switcher</label>

                    <div class="col-sm-6">
                        <select id="productType" name="productType" onChange="myNewFunction(this);" required>
                            <option id="type_Switcher" value="">Type Switcher
                            </option>
                            <option id="#DVD" value="DVD">DVD</option>
                            <option id="#Furniture" value="Furniture">Furniture</option>
                            <option id="#Book" value="Book">Book</option>
                        </select>
                    </div>
                </div>
                <!-- class for selected product div -->
                <div class="select container">
                    <div class="select display"> </div>
                </div>
                <div class="save button">
                    <button type="submit" btnid="#save-btn" class="btn btn-primary" name="save">Save</button>
                </div>
        </form>
    </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="./JS/main.js"> </script>

</body>

</html>