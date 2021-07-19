<?php
include 'models/db_config.php';




function getAllDepartments(){
  $query="select * from departments";
  $rs=get($query);
  return $rs;
}


 ?>
