<?php

include 'controllers/CategoryController.php';

 ?>

<html >
<body>

  <fieldset >
    <form action="" method="post">
      <h1>Add Categories</h1>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
          :  <input name="name" value="<?php echo $name;?>" type="text"><br>
          <span><?php echo $err_name;?></span><br>
        </td>


        <tr>
          <td align="center"><input type="submit" name="add_category" value="Add category" ></td>
        </tr>


        </table>
    </form>
  </fieldset>

</body>
</html>
