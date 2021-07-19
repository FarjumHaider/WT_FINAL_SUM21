<?php
require_once 'models/db_config.php';


$name="";
$err_name="";
$dob="";
$err_dob="";
$credit="";
$err_credit="";
$cgpa="";
$err_cgpa="";
$dept_id="";
$err_dept_id="";

$err_db="";
$hasError="";

if(isset($_POST["add_student"])){

if(empty($_POST["name"])){
  $hasError=true;
  $err_name="&nbsp;&nbsp;*Name Required";
}
elseif (strlen($_POST["name"]) <3){
  $hasError = true;
  $err_name = "&nbsp;&nbsp;*Name must be greater than 5 characters";
}
elseif (is_numeric($_POST["name"])){
  $hasError = true;
  $err_name = "&nbsp;&nbsp;*Name must be characters";
    }
else
{
  $name = $_POST["name"];
}

if(empty($_POST["dob"])){
  $hasError=true;
  $err_dob="&nbsp;&nbsp;*DOB Required";
}

else
{
  $dob = $_POST["dob"];
}


if(empty($_POST["credit"]))
{
  $hasError=true;
  $err_credit="&nbsp;&nbsp;*Credit Required";
}
elseif (!is_numeric($_POST["credit"]))
{
  $hasError=true;
  $err_credit="&nbsp;&nbsp;*Only number allowed";
}
else
{
  $credit = htmlspecialchars($_POST["credit"]);
}


if(empty($_POST["cgpa"])){
  $hasError=true;
  $err_cgpa="&nbsp;&nbsp;*CGPA Required";
}

else
{
  $cgpa = $_POST["cgpa"];
}


if(empty($_POST["dept_id"])){
  $hasError=true;
  $err_dept_id="&nbsp;&nbsp;*Department Required";
}

else
{
  $dept_id = $_POST["dept_id"];
}


if(!$hasError){
  echo "string";
  $rs=insertStudent($name,$dept_id,$dob,$credit,$cgpa);
  if ($rs === true) {
    header("Location: all_students.php");
  }
  $err_db = $rs;
  }



}

elseif (isset($_POST["edit_student"])) {
  if(empty($_POST["name"])){
    $hasError=true;
    $err_name="&nbsp;&nbsp;*Name Required";
  }
  elseif (strlen($_POST["name"]) <3){
    $hasError = true;
    $err_name = "&nbsp;&nbsp;*Name must be greater than 5 characters";
  }
  elseif (is_numeric($_POST["name"])){
    $hasError = true;
    $err_name = "&nbsp;&nbsp;*Name must be characters";
      }
  else
  {
    $name = $_POST["name"];
  }

  if(empty($_POST["dob"])){
    $hasError=true;
    $err_dob="&nbsp;&nbsp;*DOB Required";
  }

  else
  {
    $dob = $_POST["dob"];
  }


  if(empty($_POST["credit"]))
  {
    $hasError=true;
    $err_credit="&nbsp;&nbsp;*Credit Required";
  }
  elseif (!is_numeric($_POST["credit"]))
  {
    $hasError=true;
    $err_credit="&nbsp;&nbsp;*Only number allowed";
  }
  else
  {
    $credit = htmlspecialchars($_POST["credit"]);
  }


  if(empty($_POST["cgpa"])){
    $hasError=true;
    $err_cgpa="&nbsp;&nbsp;*CGPA Required";
  }

  else
  {
    $cgpa = $_POST["cgpa"];
  }


  if(empty($_POST["dept_id"])){
    $hasError=true;
    $err_dept_id="&nbsp;&nbsp;*Department Required";
  }

  else
  {
    $dept_id = $_POST["dept_id"];
  }

  if(!$hasError){
    $rs=updateStudent($name,$dept_id,$dob,$credit,$cgpa,$_POST["id"]);
    if ($rs === true) {
      header("Location: all_students.php");
    }
    $err_db = $rs;
    }


}

function insertStudent($name,$dept_id,$dob,$credit,$cgpa){
  $query="insert into student values (NULL,'$name',$dept_id,'$dob',$credit,'$cgpa')";
  return execute($query);

}

// function insertStudent($name,$dob,$credit,$cgpa,$dept_id){
// 		$query = "insert into student values (NULL,'$name','$dob',$credit,'$cgpa',$dept_id)";
// 		return execute($query);
// 	}

function getAllStudents(){
  $query="select s.*,d.name as 'd_name' from student s left join departments d on s.dept_id=d.id";
  $rs=get($query);
  return $rs;
}

function getStudent($id){
  $query="select * from student where id=$id";
  $rs=get($query);
  return $rs[0];
}

function updateStudent($name,$dept_id,$dob,$credit,$cgpa,$id){
  $query="update student set name='$name',dept_id=$dept_id,dob='$dob',credit=$credit,cgpa='$cgpa'  where id=$id";
  return execute($query);
}
 ?>
