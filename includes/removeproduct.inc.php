<?php
    include_once '../config/dbh.php';

    if (isset($_POST['submit']) && isset($_POST['product_id']))
    {
        $product_id = $_POST['product_id'];
        $object = new Dbh;
        $pdo = $object->connect();
        if($object->deleteFromTbProducts($pdo, $_POST['product_id']))
            echo "Product removed";
        else
            echo "Product not removed";
    }    
    else
        echo "Product not removed";