<?php
    include_once 'header.php';
    include_once 'config/dbh.php';
    include_once 'product_row.class.php';
    include_once 'product_table.class.php';
?>

<?php

    //New Database Handler
    $object = new Dbh;
    $pdo = $object->connect();
    if ($rows = $object->selectAllFromTbProducts($pdo))
    {
        //Generate The Table
        $table = new ProductTable($rows);
        $table->echo_html_table();
    }
