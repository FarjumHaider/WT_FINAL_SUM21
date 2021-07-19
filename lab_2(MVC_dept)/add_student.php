
<?php

require_once 'controllers/StudentController.php';
require_once 'controllers/DepartmentController.php';
$departments = getAllDepartments();
 ?>

<html >
<body>

  <fieldset >
    <form action="" method="post">
      <h1>Add Student</h1>
      <h5><?php echo $err_db; ?></h5>
      <table>
        <tr>
          <td >Name</td>
          <td>
            :  <input name="name" value="<?php echo $name;?>" type="text"><br>
            <span><?php echo $err_name;?></span><br>
          </td>
        <tr>

        <tr>
          <td >DBO</td>
          <td>
            :  <input name="dob" value="<?php echo $dob;?>" type="text"><br>
            <span><?php echo $err_dob;?></span><br>
          </td>
        <tr>

        <tr>
          <td >Credit</td>
          <td>
            :  <input name="credit" value="<?php echo $credit;?>" type="text"><br>
            <span><?php echo $err_credit;?></span><br>
          </td>
        <tr>


        <tr>
          <td >CGPA</td>
          <td>
            :  <input name="cgpa" value="<?php echo $cgpa;?>" type="text"><br>
            <span><?php echo $err_cgpa;?></span><br>
          </td>
        <tr>

        <tr >
          <td >Department</td>
          <td >
            :  <select name="dept_id">
                <option disabled selected>Choose</option>

                <?php
                  foreach ($departments as $d) {
                    echo "<option value='".$d["id"]."'>".$d["name"]."</option>";
                  }

                 ?>
               </select>
            <!-- <input name="department" value="" type="text"><br>
            <span></span><br> -->
          </td>
        <tr>

        <tr>
          <td align="center"><input type="submit" name="add_student" value="Add Student" ></td>
        </tr>

      </table>
    </form>
  </fieldset>

</body>
</html>
