<?php

require_once "./database/db_connection.php";
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="container text-right">
            <h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-swatchbook "></i> Product List</h1>
            <div>
                <div class="clearfix justify-content-center">

                </div>
            </div>


            <?php
$fetch = new fetchOperation();
$rows  = $fetch->getAllRecord("dvd");
foreach ($rows as $row) {
    echo "<div class='row'>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  
<div>" . $row["name"] . "</div>
                   <div>" . $row["price"] . "$</div>
                   <div>Size:" . $row["size"] . "</div>
                    
                  
                </div>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  

                    
                  
                </div>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  

                    
                  
                </div>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  

                    
                  
                </div>
            </div>
       </div>

</div>";
}
$rows = $fetch->getAllRecord("book");
foreach ($rows as $row) {
    echo "<div class='row'>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  
<div>" . $row["name"] . "</div>
                   <div>" . $row["price"] . "$</div>
                   <div>Size:" . $row["size"] . "</div>
                    
                  
                </div>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  

                    
                  
                </div>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  

                    
                  
                </div>
            </div>
        </div>
        <div class='col-sm-2'>
            <div class='card'>
                <div class='card-body'>
                  
                 <input type='checkbox' checked='checked'>
  
          
                </div>
            </div>
       </div>

</div>";
}
?>

            </tbody>
            </table>
        </div>

        </div>




    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>