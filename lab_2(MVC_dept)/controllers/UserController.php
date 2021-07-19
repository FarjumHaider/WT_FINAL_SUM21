<?php

include 'models/db_config.php';


$name="";
$err_name="";
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$email="";
$err_email="";
$hasError=false;
$err_db="";



if (isset($_POST["btn_login"])) {
  if(empty($_POST["username"])){
    $hasError=true;
    $err_uname= "&nbsp;&nbsp;*Username Required";
  }
  elseif (strlen($_POST["username"]) < 6){
    $hasError = true;
    $err_uname = "&nbsp;&nbsp;*Username must be greater than 6 characters";
  }
  elseif(strpos($_POST["username"]," "))
      {
        $hasError = true;
        $err_uname = "&nbsp;&nbsp;*Space is not allowed.";
      }
  else
      {
        $uname = $_POST["username"];

      }

      if(empty($_POST["password"])){
        $hasError=true;
        $err_pass="&nbsp;&nbsp;*Password Required";
      }
      elseif (strlen($_POST["password"]) < 8){
        $hasError = true;
        $err_pass = "&nbsp;&nbsp;*Password must be greater than 8 characters";
      }
      else if(ctype_upper($_POST["password"]) || ctype_lower($_POST["password"]) ){
        $hasError = true;
        $err_pass="&nbsp;&nbsp;*Password should combination of uppercase and lowercase alphabet";
          }
      elseif (!strpos($_POST["password"],"#") && !strpos($_POST["password"],"?") ){
        $hasError = true;
        $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 special character ";
      }


      elseif (is_numeric($_POST["password"])){
        $hasError = true;
        $err_pass = "&nbsp;&nbsp;*Password should have uppercase and lowercase alphabe ";
          }

          else
          {
            $l=0;
            $arr_1=str_split($_POST["password"]);

            for ($i=0; $i < count($arr_1) ; $i++)
             {
               if (is_numeric($arr_1[$i]))
              {
                $l++;
                break;

              }
             }
             if ($l==0) {
               $hasError = true;
               $err_pass = "&nbsp;&nbsp;*Password should have atleast 1 number ";
             }
             else
             {
               $pass = htmlspecialchars($_POST["password"]);
             }
            }


            if(!$hasError){
              if(authenticateUser($uname,$pass)){
                header("Location: dashboard.php");
              }
              $err_db ="Username and password invalid";

            }
}


function authenticateUser($uname,$pass){
  $query="select * from user where username='$uname' and password='$pass'";
  $rs=get($query);
  if(count($rs)>0){
    return true;
  }
  return false;
}

?>
