<?php
include 'controllers/CategoryController.php';
$categories = getAllCategories();
// echo "<pre>";
// print_r($categories);
// echo "</pre>";
 ?>
<html>

  </head>
  <body>
    <h1>All Categories</h1>
    <table>
      <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th>Product Count</th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $i=1;
          foreach ($categories as $c) {
            $id =$c["id"];
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$c["name"]."</td>";
              echo'<td> <a href="editcategory.php?id='.$id.'">Edit</a> </td>';
            echo "</tr>";
            $i++;
          }

         ?>

      </tbody>
    </table>
  </body>
</html>
