<?php
include 'controllers/CategoryController.php';
$id=$_GET["id"];
$c=getCategory($id);

 ?>
<html>

  <body>
    <form class="" action="" method="post">
      <h1>Edit categories</h1>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Name</td>
        <td>
           <input name="id" value="<?php echo $c["id"];?>" type="hidden">
        </td>
        <td>
          :  <input name="name" value="<?php echo $c["name"];?>" type="text"><br>
        </td>
        <tr>
          <td align="center"><input type="submit" name="edit_category" value="Edit category" ></td>
        </tr>

        <tr>
    </form>
  </body>
</html>
