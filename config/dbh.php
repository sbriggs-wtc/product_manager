<?php

class Dbh
{
    public function connect()
    {
        include_once("database.php");
        try
        {            
            $pdo = new PDO($DSN, $DB_USERNAME, $DB_PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            $pdo->exec("CREATE DATABASE IF NOT EXISTS $DB_NAME");
            $pdo->exec("USE $DB_NAME");
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " .$e->getMessage();
        }
    }

    public function createTbProducts($pdo)
    {
        $pdo->exec("CREATE TABLE IF NOT EXISTS `db_product_manager`.`tb_products`(
            `product_id` INT NOT NULL AUTO_INCREMENT ,
            `product_name` VARCHAR(255) NULL DEFAULT NULL ,
            `product_price` INT(255) NULL DEFAULT NULL ,
            PRIMARY KEY (`product_id`)) ENGINE = InnoDB;");
    }

    public function  insertIntoTbProducts($pdo, $product_name, $product_price)
    {
        $statement = $pdo->prepare(
            "INSERT INTO `tb_products` (`product_id`, `product_name`, `product_price`)
            VALUES (NULL, :product_name, :product_price);");
        $statement->bindParam(":product_name", $product_name);
        $statement->bindParam(":product_price", $product_price);
        return($statement->execute());
    }

    public function selectAllFromTbProducts($pdo)
    {
        $statement = $pdo->prepare("SELECT * FROM `tb_products`");
        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_CLASS);
        return ($rows);
    }

    public function updateTbProducts($pdo, $product_id, $product_name, $product_price)
    {
        $statement = $pdo->prepare("UPDATE `tb_products` SET 
        `product_name` = :product_name, 
        `product_price` = :product_price 
        WHERE `tb_products`.`product_id` = :product_id");
        $statement->bindParam(":product_id", $product_id);
        $statement->bindParam(":product_name", $product_name);
        $statement->bindParam(":product_price", $product_price);
        return($statement->execute());
    }

    public function deleteFromTbProducts($pdo, $product_id)
    {
        $statement = $pdo->prepare("DELETE FROM `tb_products` WHERE `product_id` = :product_id");
        $statement->bindParam(":product_id", $product_id);
        return($statement->execute());
    }
}
