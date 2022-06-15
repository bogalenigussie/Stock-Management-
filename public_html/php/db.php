<?php

function Createdb(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="products";
    //create connection
   $con =mysqli_connect($servername,$username,$password);
    //check connection
if(!$con){
    die("Connection Failed:" .mysqli_connect_error());
}

//create Database
$sql="CREATE DATABASE IF NOT EXISTS $dbname";
if(mysqli_query($con,$sql)){
      $con  =mysqli_connect($servername,$username,$password,$dbname);
    
        // sql to create new table
     $sql = " CREATE TABLE IF NOT EXISTS productLists
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            sku VARCHAR (25) NOT NULL,
                            product_Name VARCHAR (10),
                            price FLOAT,
                            product_Type  VARCHAR (10)
                             
                            );";

            if (mysqli_query($con, $sql)){
              
               return $con;
            }else{
                echo "cannot create table";
            }

        }else{
            return false;
        }




}

    