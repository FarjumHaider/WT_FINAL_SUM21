<?php
  //session_start();
  // if (!isset($_SESSION["loggeduser"])) {
  if (!isset($_COOKIE["loggeduser"])) {
    header("Location: login.php");
  }
 ?>

<html>
  <body>
    <h1 align="center">Welcome <?php echo $_COOKIE["loggeduser"]; ?></h1>
    <a href="add_product.php">Add Products</a>
    <a href="">All Products</a>
    <a href="">All Users</a>
    <a href="">All Categories</a>
    <br>

    <form action="" method="post">

          Id:<input name="" value="" type="text"><br>
          Name:<input name="" value="" type="text"><br>
          Quantity:<input name="" value="" type="text"><br>
          Price:<input name="" value="" type="text"><br>
          Description:<input name="" value="" type="text"><br>

          <input type="submit" name="" value="Add">

    </form>

  </body>
</html>
