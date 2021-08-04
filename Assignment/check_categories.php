<?php
include 'controllers/CategoryController.php';
$name = $_GET["name"];
$categorie=checkCategory($name);
echo $name;

 ?>
