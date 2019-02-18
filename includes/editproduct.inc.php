<?php
    include_once '../config/dbh.php';

    if (isset($_POST['submit']) && isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']))
    {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $object = new Dbh;
        $pdo = $object->connect();
        if($object->updateTbProducts($pdo, $product_id, $product_name, $product_price))
            echo "Product changed";
        else
            echo "Product not changed";        
    }    
else
    echo "Product not changed";