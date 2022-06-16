<?php
require_once "./database/dbConnection.php";
require_once "./includes/fetchData.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible content=" ie=edge" />
    <title>Product List</title>
    <!--Font awesome-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap CDN-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--custome stylesheet-->
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>

    <div class="heading productlist">
        <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-swatchbook "></i> Product List</h1>
        <div class="btn-productlist">
            <button type="button" class="btn btn-warning float-right ml-2">ADD</button>
            <button type="button" class="btn btn-danger float-right">MASS DELETE</button>
        </div>
    </div>
    <?php
$fetch = new fetchOperation();
$rows  = $fetch->getAllRecord();
echo "<div class='row  text-center'>";
foreach ($rows as $row) 
    {
    
      echo "  
        <div class='col-sm-3'>
            <div class='card'>
                <div class='card-body'>
                    <input class='delete-checkbox' value='" . $row["id"] . "' type='checkbox' >
                            <div>" . $row["sku"] . "</div>
                            <div>" . $row["name"] . "</div>
                            <div>" . $row["price"] . "$</div>";
                if (isset($row["size"])) {
                    echo " <div>Size:" . $row["size"] . "MB</div>";
                }
                if (isset($row["weight"])) {
                    echo " <div>weight:" . $row["weight"] . "KG</div>";
                }
                if (isset($row["height"])) {
                    echo " <div>Dimension:" . $row["height"] . "x" . $row["length"] . "x" . $row["width"] . "</div>";
                }
      echo " 
                </div>
            </div>
        </div>";
    }
echo "</div>";
?>


</body>

</html>