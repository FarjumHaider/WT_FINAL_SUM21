
<?php
include 'controllers/DepartmentController.php';
$departments = getAllDepartments();
// echo "<pre>";
// print_r($categories);
// echo "</pre>";
 ?>
<html>

  </head>
  <body>
    <h1>All Departments</h1>
    <table>
      <thead>
        <th>Sl#</th>
        <th>Name</th>
        <th>Action</th>
        <th></th>
        <th></th>
      </thead>
      <tbody>
        <?php
          $i=1;
          foreach ($departments as $d) {
            $id =$d["id"];
            echo "<tr>";
              echo "<td>$i</td>";
              echo "<td>".$d["name"]."</td>";
              echo'<td> <a href="edit_department.php?id='.$id.'">Edit</a> </td>';
            echo "</tr>";
            $i++;
          }

         ?>

      </tbody>
    </table>
  </body>
</html>
