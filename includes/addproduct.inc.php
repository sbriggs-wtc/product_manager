<?php
    include_once '../config/dbh.php';

    if (isset($_POST['submit'])&& isset($_POST['product_name']) && isset($_POST['product_price']))
    {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $object = new Dbh;
        $pdo = $object->connect();
        if($object->insertIntoTbProducts($pdo, $product_name, $product_price))
            echo "Product added";
        else
            echo "Product not added";        
    }    
else
    echo "Product not added";