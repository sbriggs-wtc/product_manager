<?php

include_once("dbh.php");
include_once("../product_row.class.php");
include_once("../product_table.class.php");

$object = new Dbh;
$pdo = $object->connect();
$object->createTbProducts($pdo);

//Insert some dummy data
$object->insertIntoTbProducts($pdo, "MSI GeForce RTX 2080 Gaming X Trio", 11960);
$object->insertIntoTbProducts($pdo, "Zotac GeForce RTX 2060 Amp", 5210);
$object->insertIntoTbProducts($pdo, "MSI GeForce RTX 2070 Armor", 7170);
$object->insertIntoTbProducts($pdo, "Nvidia GeForce GTX 1060 Founders Edition", 4220);
$object->insertIntoTbProducts($pdo, "Nvidia GeForce RTX 2080 Founders Edition", 11260);
$object->insertIntoTbProducts($pdo, "Nvidia GeForce RTX 2080 Ti Founders Edition", 16900);
$object->insertIntoTbProducts($pdo, "XFX Radeon RX 580 GTS XXX Edition", 4171);
$object->insertIntoTbProducts($pdo, "XFX Radeon RX 590 Fatboy", 3791);
$object->insertIntoTbProducts($pdo, "AMD Radeon RX Vega 64", 9147);
$object->insertIntoTbProducts($pdo, "AMD Radeon VII", 9851);
