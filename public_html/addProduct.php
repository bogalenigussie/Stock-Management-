<?php
include_once "./database/constants.php"; ?>
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
    <link rel="stylesheet" href="style.css">
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
        <div class="header-2">
            <nav class="navbar">
                <a href="#home"></a>
        </div>

        <?php if (isset($_GET["msg"]) and !empty($_GET["msg"])) { ?>
        <div class="success_msg">
            <?php echo $_GET["msg"]; ?>
            <button type="button" class="close_btn" style="float: right;">
                <span aria-hidden="true"> &times;</span>
            </button>
        </div>

        <?php } ?>

    </header>
    <div class="container">
        <form id="product_form" class="w-50" onsubmit="return false">
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
                        <select id="myselect" name="product_Type" onChange="myNewFunction(this);" required>
                            <option id="type_Switcher" value="">Type Switcher
                            </option>
                            <option id="#DVD" value="DVD">DVD</option>
                            <option id="#Furniture" value="Furniture">Furniture</option>
                            <option id="#Book" value="Book">Book</option>
                        </select>
                    </div>
                </div>
                <!-- class for selected product -->
                <div class="sel_container">
                    <div class="sel_Product"> </div>
                    <div class="pro_Properties"> </div>
                </div>
                <div class="saveButton">
                    <button type="submit" btnid="#save-btn" class="btn btn-primary" name="save">Save</button>
                </div>
        </form>
    </div>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./JS/operation.js"> </script>
    <script src="./JS/main.js"> </script>
    <!-- custom js file link  -->


</body>

</html>