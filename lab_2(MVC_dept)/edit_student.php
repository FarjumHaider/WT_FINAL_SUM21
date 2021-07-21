<?php
require_once 'controllers/StudentController.php';
require_once 'controllers/DepartmentController.php';
$departments=getAllDepartments();
$id=$_GET["id"];
$s=getStudent($id);

// echo "<pre>";
// print_r($s);
// echo "</pre>";
// echo $dept_id;

 // echo "<pre>";
 // print_r($departments);
 // echo "</pre>";
 // echo $dept_id;
 ?>
<html>

  <body>
    <form class="" action="" method="post">
      <h1>Edit categories</h1>
      <h5><?php echo $err_db; ?></h5>

      <tr>
        <td>
           <input name="id" value="<?php echo $s["id"];?>" type="hidden">
        </td>
        <td >Name</td>
        <td>
          :  <input name="name" value="<?php echo $s["name"];?>" type="text"><br>
          <span><?php echo $err_name;?></span><br>
        </td>
      <tr>

      <tr>
        <td >DBO</td>
        <td>
          :  <input name="dob" value="<?php echo $s["dob"];?>" type="text"><br>
          <span><?php echo $err_dob;?></span><br>
        </td>
      <tr>

      <tr>
        <td >Credit</td>
        <td>
          :  <input name="credit" value="<?php echo $s["credit"];?>" type="text"><br>
          <span><?php echo $err_credit;?></span><br>
        </td>
      <tr>


      <tr>
        <td >CGPA</td>
        <td>
          :  <input name="cgpa" value="<?php echo $s["cgpa"];?>" type="text"><br>
          <span><?php echo $err_cgpa;?></span><br>
        </td>
      <tr>


      <tr >
           <td >Department</td>

           <td >
             :  <select name="dept_id">
                 <option disabled selected>Choose</option>

                 <?php
                   // echo id;
                   foreach ($departments as $d) {
                       if($d["id"] == $s["dept_id"])
                         // echo $d["name"];
                         echo "<option selected value='".$d["id"]."'>".$d["name"]."</option>";
                       else
                         echo "<option value='".$d["id"]."'>".$d["name"]."</option>";


                   }

                  ?>
                </select><br>
                <span><?php echo $err_dept_id;?></span><br>
           </td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="edit_student" value="Edit Student" ></td>
      </tr>



    </form>
  </body>
</html>
